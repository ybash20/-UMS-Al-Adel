<?php namespace crocodicstudio\crudbooster\controllers;

use CRUDBooster;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Excel;
use Illuminate\Support\Facades\PDF;

class NotificationsController extends CBController
{
    public function cbInit()
    {
        # START CONFIGURATION DO NOT REMOVE THIS LINE
        $this->table = "ums_notifications";
        $this->primary_key = "id";
        $this->title_field = "content";
        $this->limit = 20;
        $this->orderby = ["id" => "desc"];
        $this->button_show = true;
        $this->button_add = false;
        $this->button_delete = true;
        $this->button_export = false;
        $this->button_import = false;
        $this->global_privilege = true;
        # END CONFIGURATION DO NOT REMOVE THIS LINE

		# START COLUMNS DO NOT REMOVE THIS LINE
        $this->col = [];
        $this->col[] = ["label" => "Content", "name" => "content", "callback_php" => '"<a href=\"'.url(config('crudbooster.ADMIN_PATH')).'/notifications/read'.'/$row->id\">$row->content</a>"'];
        $this->col[] = [
            'label' => 'Read',
            'name' => 'is_read',
            'callback_php' => '($row->is_read)?"<span class=\"label label-default\">Already Read</span>":"<span class=\"label label-danger\">NEW</span>"',
        ];
        # END COLUMNS DO NOT REMOVE THIS LINE

		# START FORM DO NOT REMOVE THIS LINE
        $this->form = [];
        $this->form[] = ["label" => "Content", "name" => "content", "type" => "text"];
        $this->form[] = ["label" => "Icon", "name" => "icon", "type" => "text"];
        $this->form[] = ["label" => "Notification Command", "name" => "notification_command", "type" => "textarea"];
        $this->form[] = ["label" => "Is Read", "name" => "is_read", "type" => "text"];
        # END FORM DO NOT REMOVE THIS LINE

    }

    public function hook_query_index(&$query)
    {
        $query->where('id_ums_users', CRUDBooster::myId());
    }

    public function getLatestJson()
    {

        $rows = DB::table('ums_notifications')->where('id_ums_users', 0)->orWhere('id_ums_users', CRUDBooster::myId())->orderby('id', 'desc')->where('is_read', 0)->take(25);
        if (\Schema::hasColumn('ums_notifications', 'deleted_at')) {
            $rows->whereNull('deleted_at');
        }

        $total = count($rows->get());

        return response()->json(['items' => $rows->get(), 'total' => $total]);
    }

    public function getRead($id)
    {
        DB::table('ums_notifications')->where('id', $id)->update(['is_read' => 1]);
        $row = DB::table('ums_notifications')->where('id', $id)->first();

        return redirect($row->url);
    }
}

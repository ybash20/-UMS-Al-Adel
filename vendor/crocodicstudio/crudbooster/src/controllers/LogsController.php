<?php namespace crocodicstudio\crudbooster\controllers;

use Illuminate\Support\Facades\Excel;
use Illuminate\Support\Facades\PDF;

class LogsController extends CBController
{
    public function cbInit()
    {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "ipaddress";
			$this->global_privilege = false;
			$this->button_table_action = true;
			$this->button_bulk_action = true;
			$this->button_action_style = "button_icon";
			$this->button_add = false;
			$this->button_edit = false;
			$this->button_delete = false;
			$this->button_detail = true;
			$this->button_show = false;
			$this->button_filter = false;
			$this->button_import = false;
			$this->button_export = true;
			$this->table = "ums_logs";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Time Access","name"=>"created_at"];
			$this->col[] = ["label"=>"IP Address","name"=>"ipaddress"];
			$this->col[] = ["label"=>"User","name"=>"id_ums_users","join"=>"ums_users,name"];
			$this->col[] = ["label"=>"Description","name"=>"description"];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Time Access','name'=>'created_at','type'=>'text','width'=>'col-sm-9','readonly'=>'1'];
			$this->form[] = ['label'=>'IP Address','name'=>'ipaddress','type'=>'text','width'=>'col-sm-9','readonly'=>'1'];
			$this->form[] = ['label'=>'User Agent','name'=>'useragent','type'=>'text','width'=>'col-sm-9','readonly'=>'1'];
			$this->form[] = ['label'=>'URL','name'=>'url','type'=>'text','width'=>'col-sm-9','readonly'=>'1'];
			$this->form[] = ['label'=>'User','name'=>'id_ums_users','type'=>'select','width'=>'col-sm-9','datatable'=>'ums_users,name'];
			$this->form[] = ['label'=>'Description','name'=>'description','type'=>'text','width'=>'col-sm-9','readonly'=>'1'];
			$this->form[] = ['label'=>'Details','name'=>'details','type'=>'custom','width'=>'col-sm-9'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ["label" => "Time Access", "name" => "created_at", "readonly" => true];
			//$this->form[] = ["label" => "IP Address", "name" => "ipaddress", "readonly" => true];
			//$this->form[] = ["label" => "User Agent", "name" => "useragent", "readonly" => true];
			//$this->form[] = ["label" => "URL", "name" => "url", "readonly" => true];
			//$this->form[] = [
			//"label" => "User",
			//"name" => "id_ums_users",
			//"type" => "select",
			//"datatable" => config('crudbooster.USER_TABLE').",name",
			//"readonly" => true,
			//];
			//$this->form[] = ["label" => "Description", "name" => "description", "readonly" => true];
			//$this->form[] = ["label" => "Details", "name" => "details", "type" => "custom"];
			# OLD END FORM

			}

    public static function displayDiff($old_values, $new_values)
    {
        $diff = self::getDiff($old_values, $new_values);
        $table = '<table class="table table-striped"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody>';
        foreach ($diff as $key => $value) {
            $table .= "<tr><td>$key</td><td>$old_values[$key]</td><td>$new_values[$key]</td></tr>";
        }
        $table .= '</tbody></table>';

        return $table;
    }
    public static function displayTable($array)
    {
        $table = '<table class="table table-striped"><thead><tr><th>Name</th><th>Value</th></thead><tbody>';
        foreach ($array as $name => $value) {
            $table .= "<tr><td>$name</td><td>$value</td></tr>";
        }
        $table .= '</tbody></table>';

        return $table;
    }

    private static function getDiff($old_values, $new_values)
    {
        unset($old_values['id']);
        unset($old_values['created_at']);
        unset($old_values['updated_at']);
        unset($new_values['created_at']);
        unset($new_values['updated_at']);

        return array_diff($old_values, $new_values);
    }
}

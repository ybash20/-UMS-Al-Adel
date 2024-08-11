<?php

namespace App\Http\Controllers;

use UMS;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Excel;
use Illuminate\Support\Facades\PDF;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class SettingsController extends UMSController
{
    public function cbInit()
    {
        # START CONFIGURATION DO NOT REMOVE THIS LINE
        $this->module_name = "Settings";
        $this->table = 'ums_settings';
        $this->primary_key = 'id';
        $this->title_field = "name";
        $this->index_orderby = ['name' => 'asc'];
        $this->button_delete = true;
        $this->button_show = false;
        $this->button_cancel = false;
        $this->button_import = false;
        $this->button_export = false;
        # END CONFIGURATION DO NOT REMOVE THIS LINE

        # START COLUMNS DO NOT REMOVE THIS LINE
        $this->col = [];
        $this->col[] = ["label" => "Nama", "name" => "name", "callback_php" => "ucwords(str_replace('_',' ',%field%))"];
        $this->col[] = ["label" => "Setting", "name" => "content"];
        # END COLUMNS DO NOT REMOVE THIS LINE

        # START FORM DO NOT REMOVE THIS LINE
        $this->form = [];

        if (Request::get('group_setting')) {
            $value = Request::get('group_setting');
        } else {
            $value = 'General Setting';
        }

        $this->form[] = ['label' => 'Group', 'name' => 'group_setting', 'value' => $value];
        $this->form[] = ['label' => 'Label', 'name' => 'label'];

        $this->form[] = [
            "label" => "Type",
            "name" => "content_input_type",
            "type" => "select",
            "dataenum" => ["text", "number", "email", "textarea", "wysiwyg", "upload_image", "upload_document", "datepicker", "radio", "select"],
        ];
        $this->form[] = [
            "label" => "Radio / Select Data",
            "name" => "dataenum",
            "placeholder" => "Example : abc,def,ghi",
            "jquery" => "
			function show_radio_data() {
				var cit = $('#content_input_type').val();
				if(cit == 'radio' || cit == 'select') {
					$('#form-group-dataenum').show();
				}else{
					$('#form-group-dataenum').hide();
				}
			}
			$('#content_input_type').change(show_radio_data);
			show_radio_data();
			",
        ];
        $this->form[] = ["label" => "Helper Text", "name" => "helper", "type" => "text"];
        # END FORM DO NOT REMOVE THIS LINE
    }

    public function getShow()
    {
        $this->cbLoader();

        if (! UMS::isManager()) {
            UMS::insertLog(lang("log_try_view", ['name' => 'Setting', 'module' => 'Setting']));
            UMS::redirect(UMS::adminPath(), lang('denied_access'));
        }

        $data['page_title'] = urldecode(Request::get('group'));

        return view('dashboard.setting', $data);
    }

    public function hook_before_edit(&$posdata, $id)
    {
        $this->return_url = UMS::mainpath("show")."?group=".$posdata['group_setting'];
    }

    public function getDeleteFileSetting()
    {
        $id = g('id');
        $row = UMS::first('ums_settings', $id);
        Cache::forget('setting_'.$row->name);
        if (Storage::exists($row->content)) {
            Storage::delete($row->content);
        }
        DB::table('ums_settings')->where('id', $id)->update(['content' => null]);
        UMS::redirect(Request::server('HTTP_REFERER'), lang('alert_delete_data_success'), 'success');
    }

    public function postSaveSetting()
    {

        if (! UMS::isManager()) {
            UMS::insertLog(lang("log_try_view", ['name' => 'Setting', 'module' => 'Setting']));
            UMS::redirect(UMS::adminPath(), lang('denied_access'));
        }

        $group = Request::get('group_setting');
        $setting = DB::table('ums_settings')->where('group_setting', $group)->get();
        foreach ($setting as $set) {

            $name = $set->name;

            $content = Request::get($set->name);

            if (Request::hasFile($name)) {

                if ($set->content_input_type == 'upload_image') {
                    UMS::valid([$name => 'image|max:10000'], 'view');
                } else {
                    UMS::valid([$name => 'mimes:doc,docx,xls,xlsx,ppt,pptx,pdf,zip,rar|max:20000'], 'view');
                }

                $file = Request::file($name);
                $ext = $file->getClientOriginalExtension();

                //Create Directory Monthly
                $directory = 'uploads/'.date('Y-m');
                Storage::makeDirectory($directory);

                //Move file to storage
                $filename = md5(str_random(5)).'.'.$ext;
                $storeFile = Storage::putFileAs($directory, $file, $filename);
                if ($storeFile) {
                    $content = $directory.'/'.$filename;
                }
            }

            DB::table('ums_settings')->where('name', $set->name)->update(['content' => $content]);

            Cache::forget('setting_'.$set->name);
        }

        return redirect()->back()->with(['message' => 'Your setting has been saved !', 'message_type' => 'success']);
    }

    public function hook_before_add(&$arr)
    {
        $arr['name'] = str_slug($arr['label'], '_');
        $this->return_url = UMS::mainpath("show")."?group=".$arr['group_setting'];
    }

    public function hook_after_edit($id)
    {
        $row = DB::table($this->table)->where($this->primary_key, $id)->first();

        /* REMOVE CACHE */
        Cache::forget('setting_'.$row->name);
    }
}

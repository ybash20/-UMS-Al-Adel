<?php

namespace App\Http\Controllers;

use UMS;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Excel;
use Illuminate\Support\Facades\PDF;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use App\Helpers\Fontawesome;

class MenusController extends UMSController
{
    public function cbInit()
    {
        # START CONFIGURATION DO NOT REMOVE THIS LINE
        $this->table = "ums_menus";
        $this->primary_key = "id";
        $this->title_field = "name";
        $this->limit = 20;
        $this->orderby = ["id" => "asc"];

        $this->button_table_action = true;
        $this->button_action_style = "FALSE";
        $this->button_add = false;
        $this->button_delete = true;
        $this->button_edit = true;
        $this->button_detail = true;
        $this->button_show = false;
        $this->button_filter = true;
        $this->button_export = false;
        $this->button_import = false;
        # END CONFIGURATION DO NOT REMOVE THIS LINE

        $id = UMS::getCurrentId();
        if (Request::segment(3) == 'edit') {
            $id = Request::segment(4);
            Session::put('current_row_id', $id);
        }
        $row = UMS::first($this->table, $id);
        $row = (Request::segment(3) == 'edit') ? $row : null;

        $id_module = $id_statistic = 0;

        if ($row->type == 'Module') {
            $m = UMS::first('ums_moduls', ['path' => $row->path]);
            $id_module = $m->id;
        } elseif ($row->type == 'Statistic') {
            $row->path = str_replace('statistic_builder/show/', '', $row->path);
            $m = UMS::first('ums_statistics', ['slug' => $row->path]);
            $id_statistic = $m->id;
        }

        $this->script_js = "
			$(function() {
				var current_id = '$id';
				var current_type = '$row->type';
				var type_menu = $('input[name=type]').val();
				type_menu = (current_type)?current_type:type_menu;
				if(type_menu == 'Module') {
					$('#form-group-module_slug').show();
					$('#form-group-statistic_slug,#form-group-path').hide();
					$('#module_slug').prop('required',true);
					$('#form-group-module_slug label').append('<span class=\"text-danger\" title=\"".lang('this_field_is_required')."\">*</span>');
				}else if(type_menu == 'Statistic') {
					$('#form-group-statistic_slug').show();
					$('#module_slug').prop('required',false);
					$('#form-group-module_slug,#form-group-path').hide();
					$('#statistic_slug').prop('required',true);
					$('#form-group-statistic_slug label').append('<span class=\"text-danger\" title=\"".lang('this_field_is_required')."\">*</span>');
				}else{
					$('#module_slug').prop('required',false);
					$('#form-group-module_slug,#form-group-statistic_slug').hide();
					$('#form-group-path').show();
				}


				function format(icon) {
	                  var originalOption = icon.element;
	                  var label = $(originalOption).text();
	                  var val = $(originalOption).val();
	                  if(!val) return label;
	                  var \$resp = $('<span><i style=\"margin-top:5px\" class=\"pull-right ' + $(originalOption).val() + '\"></i> ' + $(originalOption).data('label') + '</span>');
	                  return \$resp;
	              }
	              $('#list-icon').select2({
	                  width: \"100%\",
	                  templateResult: format,
	                  templateSelection: format
	              });

				$('input[name=type]').click(function() {
					var default_placeholder_path = 'NameController@methodName';
					var n = $(this).val();
					var isCheck = $(this).prop('checked');
					console.log('Click the module type '+n);
					$('#module_slug').prop('required',false);
					$('input[name=path]').attr('placeholder',default_placeholder_path);
					if(n == 'Module') {
						$('#form-group-path').hide();
						$('#form-group-statistic_slug').hide();
						$('#statistic_slug,#path').prop('required',false);

						$('#form-group-module_slug').show();
						$('#module_slug').prop('required',true);
						$('#form-group-module_slug label .text-danger').remove();
					}else if (n == 'Statistic') {
						$('#form-group-path').hide();
						$('#form-group-module_slug').hide();
						$('#module_slug,#path').prop('required',false);

						$('#form-group-statistic_slug').show();
						$('#statistic_slug').prop('required',true);
						$('#form-group-statistic_slug label .text-danger').remove();
						$('#form-group-statistic_slug label').append('<span class=\"text-danger\" title=\"".lang('this_field_is_required')."\">*</span>');
					}else if (n == 'URL') {
						$('input[name=path]').attr('placeholder','Please enter your URL');

						$('#path').prop('required',true);
						$('#form-group-path label .text-danger').remove();
						$('#form-group-path label').append('<span class=\"text-danger\" title=\"".lang('this_field_is_required')."\">*</span>');

						$('#form-group-path').show();
						$('#form-group-module_slug,#form-group-statistic_slug').hide();
					}else if (n == 'Route') {
						$('input[name=path]').attr('placeholder','Please enter the Route');

						$('#path').prop('required',true);
						$('#form-group-path label .text-danger').remove();
						$('#form-group-path label').append('<span class=\"text-danger\" title=\"".lang('this_field_is_required')."\">*</span>');

						$('#form-group-path').show();
						$('#form-group-module_slug,#form-group-statistic_slug').hide();
					}else {
						$('#module_slug,#statistic_slug').prop('required',false);

						$('#path').prop('required',true);
						$('#form-group-path label .text-danger').remove();
						$('#form-group-path label').append('<span class=\"text-danger\" title=\"".lang('this_field_is_required')."\">*</span>');

						$('#form-group-path').show();
						$('#form-group-module_slug,#form-group-statistic_slug').hide();
					}
				})
			})
			";
        # END CONFIGURATION DO NOT REMOVE THIS LINE

        # START COLUMNS DO NOT REMOVE THIS LINE
        $this->col = [];
        $this->col[] = ["label" => "Name", "name" => "name"];
        $this->col[] = ["label" => "Is Active", "name" => "is_active"];
        $this->col[] = ["label" => "Privileges", "name" => "id_ums_privileges", "join" => "ums_privileges,name"];
        # END COLUMNS DO NOT REMOVE THIS LINE

        # START FORM DO NOT REMOVE THIS LINE
        $this->form = [];
        $this->form[] = [
            "label" => "Privileges",
            "name" => "ums_menus_privileges",
            "type" => "select2",
            "select2_multiple" => true,
            "datatable" => "ums_privileges,name",
            "relationship_table" => "ums_menus_privileges",
            "required" => true,
        ];
        $this->form[] = [
            "label" => "Name",
            "name" => "name",
            "type" => "text",
            "required" => true,
            "validation" => "required|min:3|max:255"
        ];
        $this->form[] = [
            "label" => "Type",
            "name" => "type",
            "type" => "radio",
            "required" => true,
            'dataenum' => ['Module', 'Statistic', 'URL', 'Controller & Method', 'Route'],
            'value' => 'Module',
        ];

        $this->form[] = [
            "label" => "Module",
            "name" => "module_slug",
            "type" => "select",
            "datatable" => "ums_moduls,name",
            "datatable_where" => "is_protected = 0",
            "value" => $id_module,
        ];
        $this->form[] = [
            "label" => "Statistic",
            "name" => "statistic_slug",
            "type" => "select",
            "datatable" => "ums_statistics,name",
            "style" => "display:none",
            "value" => $id_statistic,
        ];

        $this->form[] = [
            "label" => "Value",
            "name" => "path",
            "type" => "text",
            'help' => 'If you select type controller, you can fill this field with controller name, you may include the method also',
            'placeholder' => 'NameController or NameController@methodName',
            "style" => "display:none",
        ];

        $fontawesome = Fontawesome::getIcons();

        $custom = view('dashboard.components.list_icon', compact('fontawesome', 'row'))->render();
        $this->form[] = ['label' => 'Icon', 'name' => 'icon', 'type' => 'custom', 'html' => $custom, 'required' => true];
        $this->form[] = [
            'label' => 'Color',
            'name' => 'color',
            'type' => 'select2',
            'dataenum' => ['normal', 'red', 'green', 'aqua', 'light-blue', 'red', 'yellow', 'muted'],
            'required' => true,
            'value' => 'normal',
        ];
        $this->form[] = [
            "label" => "Active",
            "name" => "is_active",
            "type" => "radio",
            "required" => true,
            "validation" => "required|integer",
            "dataenum" => ['1|Active', '0|InActive'],
            'value' => '1',
        ];
        $this->form[] = [
            "label" => "Dashboard",
            "name" => "is_dashboard",
            "type" => "radio",
            "required" => true,
            "validation" => "required|integer",
            "dataenum" => ['1|Yes', '0|No'],
            'value' => '0',
        ];

        $id_ums_privileges = Request::get('id_ums_privileges');
        $this->form[] = ["label" => "id_ums_privileges", "name" => "id_ums_privileges", "type" => "hidden", "value" => $id_ums_privileges];
        # END FORM DO NOT REMOVE THIS LINE
    }

    public function getIndex()
    {
        $this->cbLoader();

        $module = UMS::getCurrentModule();
        if (! UMS::isView() && $this->global_privilege == false) {
            UMS::insertLog(lang('log_try_view', ['module' => $module->name]));
            UMS::redirect(UMS::adminPath(), lang('denied_access'));
        }

        $privileges = DB::table('ums_privileges')->get();

        $id_ums_privileges = Request::get('id_ums_privileges');
        $id_ums_privileges = ($id_ums_privileges) ?: UMS::myPrivilegeId();

        $menu_active = DB::table('ums_menus')->where('parent_id', 0)->where('is_active', 1)->orderby('sorting', 'asc')->get();

        foreach ($menu_active as &$menu) {
            $child = DB::table('ums_menus')->where('is_active', 1)->where('parent_id', $menu->id)->orderby('sorting', 'asc')->get();
            if (count($child)) {
                $menu->children = $child;
            }
        }

        $menu_inactive = DB::table('ums_menus')->where('parent_id', 0)->where('is_active', 0)->orderby('sorting', 'asc')->get();

        foreach ($menu_inactive as &$menu) {
            $child = DB::table('ums_menus')->where('is_active', 1)->where('parent_id', $menu->id)->orderby('sorting', 'asc')->get();
            if (count($child)) {
                $menu->children = $child;
            }
        }

        $return_url = Request::fullUrl();

        $page_title = 'Menu Management';

        return view('dashboard.menus_management', compact('menu_active', 'menu_inactive', 'privileges', 'id_ums_privileges', 'return_url', 'page_title'));
    }

    public function hook_before_add(&$postdata)
    {
        if (! $postdata['id_ums_privileges']) {
            $postdata['id_ums_privileges'] = UMS::myPrivilegeId();
        }
        $postdata['parent_id'] = 0;

        if ($postdata['type'] == 'Statistic') {
            $stat = UMS::first('ums_statistics', ['id' => $postdata['statistic_slug']]);
            $postdata['path'] = 'statistic_builder/show/'.$stat->slug;
        } elseif ($postdata['type'] == 'Module') {
            $stat = UMS::first('ums_moduls', ['id' => $postdata['module_slug']]);
            $postdata['path'] = $stat->path;
        }

        unset($postdata['module_slug']);
        unset($postdata['statistic_slug']);

        if ($postdata['is_dashboard'] == 1) {
            //If set dashboard, so unset for first all dashboard
            //DB::table('ums_menus')->where('id_ums_privileges', $postdata['id_ums_privileges'])->where('is_dashboard', 1)->update(['is_dashboard' => 0]);
            Cache::forget('sidebarDashboard'.UMS::myPrivilegeId());
        }
    }

    public function hook_before_edit(&$postdata, $id)
    {

        if ($postdata['is_dashboard'] == 1) {
            //If set dashboard, so unset for first all dashboard
            //DB::table('ums_menus')->where('id_ums_privileges', $postdata['id_ums_privileges'])->where('is_dashboard', 1)->update(['is_dashboard' => 0]);
            Cache::forget('sidebarDashboard'.UMS::myPrivilegeId());
        }

        if ($postdata['type'] == 'Statistic') {
            $stat = UMS::first('ums_statistics', ['id' => $postdata['statistic_slug']]);
            $postdata['path'] = 'statistic_builder/show/'.$stat->slug;
        } elseif ($postdata['type'] == 'Module') {
            $stat = UMS::first('ums_moduls', ['id' => $postdata['module_slug']]);
            $postdata['path'] = $stat->path;
        }

        unset($postdata['module_slug']);
        unset($postdata['statistic_slug']);
    }

    public function hook_after_delete($id)
    {
        DB::table('ums_menus')->where('parent_id', $id)->delete();
    }

    public function postSaveMenu()
    {
        $post = Request::input('menus');
        $isActive = Request::input('isActive');
        $post = json_decode($post, true);

        $i = 1;
        foreach ($post[0] as $ro) {
            $pid = $ro['id'];
            if ($ro['children'][0]) {
                $ci = 1;
                foreach ($ro['children'][0] as $c) {
                    $id = $c['id'];
                    DB::table('ums_menus')->where('id', $id)->update(['sorting' => $ci, 'parent_id' => $pid, 'is_active' => $isActive]);
                    $ci++;
                }
            }
            DB::table('ums_menus')->where('id', $pid)->update(['sorting' => $i, 'parent_id' => 0, 'is_active' => $isActive]);
            $i++;
        }

        return response()->json(['success' => true]);
    }
}

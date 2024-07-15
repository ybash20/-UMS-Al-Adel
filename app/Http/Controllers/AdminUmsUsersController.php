<?php namespace App\Http\Controllers;

use Session;
use Request;
use DB;
use CRUDbooster;
use crocodicstudio\crudbooster\controllers\CBController;

class AdminUmsUsersController extends CBController {


	public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "name";
			$this->global_privilege = false;
			$this->button_table_action = true;
			$this->button_bulk_action = true;
			$this->button_action_style = "button_icon";
			$this->button_add = true;
			$this->button_edit = true;
			$this->button_delete = true;
			$this->button_detail = true;
			$this->button_show = true;
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = true;
			$this->table = "ums_users";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Name","name"=>"name"];
			$this->col[] = ["label"=>"Email","name"=>"email"];
			$this->col[] = ["label"=>"Department","name"=>"Department_ID","join"=>"departments,Name"];
			$this->col[] = ["label"=>"Privilege","name"=>"id_ums_privileges","join"=>"ums_privileges,name"];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Name','name'=>'name','type'=>'text','validation'=>'required|alpha_spaces|min:3','width'=>'col-sm-9'];
			$this->form[] = ['label'=>'Email','name'=>'email','type'=>'email','validation'=>'required|email|unique:ums_users,email,6','width'=>'col-sm-9'];
			$this->form[] = ['label'=>'Username','name'=>'Username','type'=>'text','validation'=>'required','width'=>'col-sm-9'];
			$this->form[] = ['label'=>'Photo','name'=>'photo','type'=>'upload','validation'=>'image|max:1000','width'=>'col-sm-9','help'=>'Recommended resolution is 200x200px'];
			$this->form[] = ['label'=>'Gender','name'=>'Gender','type'=>'select','validation'=>'required','width'=>'col-sm-9','dataenum'=>'0;1','help'=>'0 Male   ,   1 Female'];
			$this->form[] = ['label'=>'Privilege','name'=>'id_ums_privileges','type'=>'select','validation'=>'required','width'=>'col-sm-9','datatable'=>'ums_privileges,name'];
			$this->form[] = ['label'=>'Department','name'=>'Department_ID','type'=>'select','validation'=>'required','width'=>'col-sm-9','datatable'=>'departments,Name'];
			$this->form[] = ['label'=>'Theme Color','name'=>'theme_color','type'=>'select','width'=>'col-sm-9','dataenum'=>'skin-blue;skin-blue-light;skin-yellow;skin-yellow-light;skin-green;skin-green-light;skin-purple;skin-purple-light;skin-red;skin-red-light;skin-black;skin-black-light'];
			$this->form[] = ['label'=>'Password','name'=>'password','type'=>'password','validation'=>'required','width'=>'col-sm-9'];
			$this->form[] = ['label'=>'Password Confirmation','name'=>'password_confirmation','type'=>'password','validation'=>'required','width'=>'col-sm-9'];
			$this->form[] = ['label'=>'DOB','name'=>'DOB','type'=>'date','validation'=>'required','width'=>'col-sm-9'];
			$this->form[] = ['label'=>'Phone Number','name'=>'Phone_number','type'=>'number','width'=>'col-sm-9'];
			$this->form[] = ['label'=>'Governorates','name'=>'Address_ID','type'=>'select','validation'=>'required','width'=>'col-sm-9','datatable'=>'governorates,Name'];
			$this->form[] = ['label'=>'Directorates','name'=>'Address_ID','type'=>'select','validation'=>'required','width'=>'col-sm-9','datatable'=>'directorates,Name'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ['label'=>'Name','name'=>'name','type'=>'text','validation'=>'required|alpha_spaces|min:3','width'=>'col-sm-9'];
			//$this->form[] = ['label'=>'Email','name'=>'email','type'=>'email','validation'=>'required|email|unique:ums_users,email,6','width'=>'col-sm-9'];
			//$this->form[] = ['label'=>'Username','name'=>'Username','type'=>'text','validation'=>'required','width'=>'col-sm-9'];
			//$this->form[] = ['label'=>'Photo','name'=>'photo','type'=>'upload','validation'=>'image|max:1000','width'=>'col-sm-9','help'=>'Recommended resolution is 200x200px'];
			//$this->form[] = ['label'=>'Gender','name'=>'Gender','type'=>'select','validation'=>'required','width'=>'col-sm-9','dataenum'=>'0;1','help'=>'0 Male   ,   1 Female'];
			//$this->form[] = ['label'=>'Privilege','name'=>'id_ums_privileges','type'=>'select','validation'=>'required','width'=>'col-sm-9','datatable'=>'ums_privileges,name'];
			//$this->form[] = ['label'=>'Department','name'=>'Department_ID','type'=>'select','validation'=>'required','width'=>'col-sm-9','datatable'=>'departments,Name'];
			//$this->form[] = ['label'=>'Theme Color','name'=>'theme_color','type'=>'select','width'=>'col-sm-9','dataenum'=>'skin-blue;skin-blue-light;skin-yellow;skin-yellow-light;skin-green;skin-green-light;skin-purple;skin-purple-light;skin-red;skin-red-light;skin-black;skin-black-light'];
			//$this->form[] = ['label'=>'Password','name'=>'password','type'=>'password','validation'=>'required','width'=>'col-sm-9'];
			//$this->form[] = ['label'=>'Password Confirmation','name'=>'password_confirmation','type'=>'password','validation'=>'required','width'=>'col-sm-9'];
			//$this->form[] = ['label'=>'DOB','name'=>'DOB','type'=>'date','validation'=>'required','width'=>'col-sm-9'];
			//$this->form[] = ['label'=>'Phone Number','name'=>'Phone_number','type'=>'number','width'=>'col-sm-9'];
			//$this->form[] = ['label'=>'Governorates','name'=>'Address_ID','type'=>'select','validation'=>'required','width'=>'col-sm-9','datatable'=>'governorates,Name'];
			//$this->form[] = ['label'=>'Directorates','name'=>'Address_ID','type'=>'select','validation'=>'required','width'=>'col-sm-9','datatable'=>'directorates,Name'];
			# OLD END FORM

			$this->script_js = '$(function () {
                $("select[name=theme_color]").change(function () {
                    var n = $(this).val();
                    $("body").attr("class", n);
                })
            })';
			}

	public function getProfile() {

		$this->button_addmore = FALSE;
		$this->button_cancel  = FALSE;
		$this->button_show    = FALSE;
		$this->button_add     = FALSE;
		$this->button_delete  = FALSE;
		$this->hide_form 	  = ['id_ums_privileges'];

		$data['page_title'] = "label_button_profile";
		$data['row']        = CRUDBooster::first('ums_users',CRUDBooster::myId());

        return $this->view('crudbooster::default.form',$data);
	}
	public function hook_before_edit(&$postdata,$id) {
		unset($postdata['password_confirmation']);
	}
	public function hook_before_add(&$postdata) {
	    unset($postdata['password_confirmation']);
	}
}
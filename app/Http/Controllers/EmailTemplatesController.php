<?php namespace App\Http\Controllers;

use UMS;
use Illuminate\Support\Facades\Excel;
use Illuminate\Support\Facades\PDF;

class EmailTemplatesController extends UMSController
{
    public function cbInit()
    {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "name";
			$this->limit = "20";
			$this->orderby = "id,asc";
			$this->global_privilege = false;
			$this->button_table_action = true;
			$this->button_bulk_action = false;
			$this->button_action_style = "button_icon";
			$this->button_add = true;
			$this->button_edit = true;
			$this->button_delete = true;
			$this->button_detail = true;
			$this->button_show = true;
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = false;
			$this->table = "ums_email_templates";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Template Name","name"=>"name"];
			$this->col[] = ["label"=>"Slug","name"=>"slug"];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Template Name','name'=>'name','type'=>'text','validation'=>'required|min:3|max:255|alpha_spaces','width'=>'col-sm-9','placeholder'=>'You can only enter the letter only'];
			$this->form[] = ['label'=>'Slug','name'=>'slug','type'=>'text','validation'=>'required|unique:ums_email_templates,slug','width'=>'col-sm-9'];
			$this->form[] = ['label'=>'Subject','name'=>'subject','type'=>'text','validation'=>'required|min:3|max:255','width'=>'col-sm-9'];
			$this->form[] = ['label'=>'Content','name'=>'content','type'=>'wysiwyg','validation'=>'required','width'=>'col-sm-9'];
			$this->form[] = ['label'=>'Description','name'=>'description','type'=>'text','validation'=>'required|min:3|max:255','width'=>'col-sm-9'];
			$this->form[] = ['label'=>'From Name','name'=>'from_name','type'=>'text','width'=>'col-sm-9','placeholder'=>'Optional'];
			$this->form[] = ['label'=>'From Email','name'=>'from_email','type'=>'email','validation'=>'email','width'=>'col-sm-9','placeholder'=>'Optional'];
			$this->form[] = ['label'=>'Cc Email','name'=>'cc_email','type'=>'email','validation'=>'email','width'=>'col-sm-9','placeholder'=>'Optional'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ['label'=>'Template Name','name'=>'name','type'=>'text','validation'=>'required|min:3|max:255|alpha_spaces','width'=>'col-sm-9','placeholder'=>'You can only enter the letter only'];
			//$this->form[] = ['label'=>'Slug','name'=>'slug','type'=>'text','validation'=>'required|unique:ums_email_templates,slug','width'=>'col-sm-9'];
			//$this->form[] = ['label'=>'Subject','name'=>'subject','type'=>'text','validation'=>'required|min:3|max:255','width'=>'col-sm-9'];
			//$this->form[] = ['label'=>'Content','name'=>'content','type'=>'wysiwyg','validation'=>'required','width'=>'col-sm-9'];
			//$this->form[] = ['label'=>'Description','name'=>'description','type'=>'text','validation'=>'required|min:3|max:255','width'=>'col-sm-9'];
			//$this->form[] = ['label'=>'From Name','name'=>'from_name','type'=>'text','width'=>'col-sm-9','placeholder'=>'Optional'];
			//$this->form[] = ['label'=>'From Email','name'=>'from_email','type'=>'email','validation'=>'email','width'=>'col-sm-9','placeholder'=>'Optional'];
			//$this->form[] = ['label'=>'Cc Email','name'=>'cc_email','type'=>'email','validation'=>'email','width'=>'col-sm-9'];
			# OLD END FORM

			}
    //By the way, you can still create your own method in here... :)

}

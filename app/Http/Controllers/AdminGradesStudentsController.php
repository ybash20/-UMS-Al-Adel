<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;

	class AdminGradesStudentsController extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "id";
			$this->limit = "20";
			$this->orderby = "id,desc";
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
			$this->button_import = true;
			$this->button_export = true;
			$this->table = "grades";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Student ID","name"=>"Student_ID","join"=>"students,id"];
			$this->col[] = ["label"=>"Student Name","name"=>"Student_ID","join"=>"students,Name_Arabic"];
			$this->col[] = ["label"=>"Course","name"=>"Course_ID","join"=>"courses,Name"];
			$this->col[] = ["label"=>"Semester","name"=>"Semester"];
			$this->col[] = ["label"=>"Semester Grade","name"=>"Grade_30"];
			$this->col[] = ["label"=>"Exam Grade","name"=>"Grade_70"];
			$this->col[] = ["label"=>"Total Grade","name"=>"Grade_100"];
			$this->col[] = ["label"=>"Spoint","name"=>"Spoint"];
			$this->col[] = ["label"=>"Appreciation","name"=>"Appreciation_English"];
			$this->col[] = ["label"=>"Note","name"=>"Note"];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Student Name','name'=>'Student_ID','type'=>'select2','validation'=>'required','width'=>'col-sm-9','datatable'=>'students,Name_Arabic'];
			$this->form[] = ['label'=>'Course','name'=>'Course_ID','type'=>'select2','validation'=>'required','width'=>'col-sm-9','datatable'=>'courses,Name'];
			$this->form[] = ['label'=>'Semester Grade','name'=>'Grade_30','type'=>'number','validation'=>'required|integer|between:0,50','width'=>'col-sm-9'];
			$this->form[] = ['label'=>'Exam Grade','name'=>'Grade_70','type'=>'number','validation'=>'required|integer|between:0,50','width'=>'col-sm-9'];
			$this->form[] = ['label'=>'Semester','name'=>'Semester','type'=>'number','validation'=>'required|integer|between:1,8','width'=>'col-sm-9'];
			$this->form[] = ['label'=>'Total','name'=>'Grade_100','type'=>'number','width'=>'col-sm-9','disabled'=>'true'];
			$this->form[] = ['label'=>'Spoint','name'=>'Spoint','type'=>'number','width'=>'col-sm-9','disabled'=>'true'];
			$this->form[] = ['label'=>'Appreciation','name'=>'Appreciation_English','type'=>'text','width'=>'col-sm-9'];
			$this->form[] = ['label'=>'Turn','name'=>'Turn','type'=>'number','validation'=>'required|integer|between:1,10','width'=>'col-sm-9','disabled'=>'true'];
			$this->form[] = ['label'=>'Note','name'=>'Note','type'=>'text','width'=>'col-sm-9'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ['label'=>'Student Name','name'=>'Student_ID','type'=>'select2','validation'=>'required','width'=>'col-sm-9','datatable'=>'students,Name'];
			//$this->form[] = ['label'=>'Course','name'=>'Course_ID','type'=>'select2','validation'=>'required','width'=>'col-sm-9','datatable'=>'courses,Name'];
			//$this->form[] = ['label'=>'Semester Grade','name'=>'Grade_30','type'=>'number','validation'=>'required|integer|between:0,50','width'=>'col-sm-9'];
			//$this->form[] = ['label'=>'Exam Grade','name'=>'Grade_70','type'=>'number','validation'=>'required|integer|between:0,50','width'=>'col-sm-9'];
			//$this->form[] = ['label'=>'Semester','name'=>'Semester','type'=>'number','validation'=>'required|integer|between:1,8','width'=>'col-sm-9'];
			//$this->form[] = ['label'=>'Total','name'=>'Grade_100','type'=>'number','width'=>'col-sm-9','disabled'=>'true'];
			//$this->form[] = ['label'=>'Spoint','name'=>'Spoint','type'=>'number','width'=>'col-sm-9','disabled'=>'true'];
			//$this->form[] = ['label'=>'Appreciation','name'=>'Appreciation_English','type'=>'text','width'=>'col-sm-9'];
			//$this->form[] = ['label'=>'Turn','name'=>'Turn','type'=>'number','validation'=>'required|integer|between:1,10','width'=>'col-sm-9','disabled'=>'true'];
			//$this->form[] = ['label'=>'Note','name'=>'Note','type'=>'text','width'=>'col-sm-9'];
			# OLD END FORM

			/*
	        | ----------------------------------------------------------------------
	        | Sub Module
	        | ----------------------------------------------------------------------
			| @label          = Label of action
			| @path           = Path of sub module
			| @foreign_key 	  = foreign key of sub table/module
			| @button_color   = Bootstrap Class (primary,success,warning,danger)
			| @button_icon    = Font Awesome Class
			| @parent_columns = Sparate with comma, e.g : name,created_at
	        |
	        */
	        $this->sub_module = array();


	        /*
	        | ----------------------------------------------------------------------
	        | Add More Action Button / Menu
	        | ----------------------------------------------------------------------
	        | @label       = Label of action
	        | @url         = Target URL, you can use field alias. e.g : [id], [name], [title], etc
	        | @icon        = Font awesome class icon. e.g : fa fa-bars
	        | @color 	   = Default is primary. (primary, warning, succecss, info)
	        | @showIf 	   = If condition when action show. Use field alias. e.g : [id] == 1
	        |
	        */
	        $this->addaction = array();


	        /*
	        | ----------------------------------------------------------------------
	        | Add More Button Selected
	        | ----------------------------------------------------------------------
	        | @label       = Label of action
	        | @icon 	   = Icon from fontawesome
	        | @name 	   = Name of button
	        | Then about the action, you should code at actionButtonSelected method
	        |
	        */
	        $this->button_selected = array();


	        /*
	        | ----------------------------------------------------------------------
	        | Add alert message to this module at overheader
	        | ----------------------------------------------------------------------
	        | @message = Text of message
	        | @type    = warning,success,danger,info
	        |
	        */
	        $this->alert        = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Add more button to header button
	        | ----------------------------------------------------------------------
	        | @label = Name of button
	        | @url   = URL Target
	        | @icon  = Icon from Awesome.
	        |
	        */
	        $this->index_button = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Customize Table Row Color
	        | ----------------------------------------------------------------------
	        | @condition = If condition. You may use field alias. E.g : [id] == 1
	        | @color = Default is none. You can use bootstrap success,info,warning,danger,primary.
	        |
	        */
	        $this->table_row_color = array();


	        /*
	        | ----------------------------------------------------------------------
	        | You may use this bellow array to add statistic at dashboard
	        | ----------------------------------------------------------------------
	        | @label, @count, @icon, @color
	        |
	        */
	        $this->index_statistic = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Add javascript at body
	        | ----------------------------------------------------------------------
	        | javascript code in the variable
	        | $this->script_js = "function() { ... }";
	        |
	        */
	        $this->script_js = NULL;


            /*
	        | ----------------------------------------------------------------------
	        | Include HTML Code before index table
	        | ----------------------------------------------------------------------
	        | html code to display it before index table
	        | $this->pre_index_html = "<p>test</p>";
	        |
	        */
	        $this->pre_index_html = null;



	        /*
	        | ----------------------------------------------------------------------
	        | Include HTML Code after index table
	        | ----------------------------------------------------------------------
	        | html code to display it after index table
	        | $this->post_index_html = "<p>test</p>";
	        |
	        */
	        $this->post_index_html = null;



	        /*
	        | ----------------------------------------------------------------------
	        | Include Javascript File
	        | ----------------------------------------------------------------------
	        | URL of your javascript each array
	        | $this->load_js[] = asset("myfile.js");
	        |
	        */
	        $this->load_js = array();



	        /*
	        | ----------------------------------------------------------------------
	        | Add css style at body
	        | ----------------------------------------------------------------------
	        | css code in the variable
	        | $this->style_css = ".style{....}";
	        |
	        */
	        $this->style_css = NULL;



	        /*
	        | ----------------------------------------------------------------------
	        | Include css File
	        | ----------------------------------------------------------------------
	        | URL of your css each array
	        | $this->load_css[] = asset("myfile.css");
	        |
	        */
	        $this->load_css = array();


	    }


	    /*
	    | ----------------------------------------------------------------------
	    | Hook for button selected
	    | ----------------------------------------------------------------------
	    | @id_selected = the id selected
	    | @button_name = the name of button
	    |
	    */
	    public function actionButtonSelected($id_selected,$button_name) {
	        //Your code here

	    }


	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate query of index result
	    | ----------------------------------------------------------------------
	    | @query = current sql query
	    |
	    */
	    public function hook_query_index(&$query) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate row of index table html
	    | ----------------------------------------------------------------------
	    |
	    */
	    public function hook_row_index($column_index,&$column_value) {
	    	//Your code here
	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate data input before add data is execute
	    | ----------------------------------------------------------------------
	    | @arr
	    |
	    */
		public function hook_before_add(&$postdata) {
			// الحصول على القيم من $postdata
			$Grade_30 = $postdata['Grade_30'];
			$Grade_70 = $postdata['Grade_70'];
			$Grade_100 = $Grade_30 + $Grade_70;
		
			// تحقق من القيم وتعيين الحدود
			if ($Grade_100 > 100) {
				$Grade_100 = 100;
			} elseif ($Grade_100 < 0) {
				$Grade_100 = 0;
			}
		
			// تحقق من القيم المحددة وزيادة العمود Grade_100 وكتابة +1 في عمود Note
			if (in_array($Grade_100, [89, 79, 64, 49])) {
				$Grade_100 += 1;
				$postdata['Note'] = '+1';
			}
		
			// تحديث القيم في $postdata
			$postdata['Grade_100'] = $Grade_100;
			$postdata['Spoint'] = $Grade_100 / 20;
		
			// تعيين التقديرات بناءً على قيمة Grade_100
			if ($Grade_100 >= 0 && $Grade_100 <= 49) {
				$postdata['Appreciation_Arabic'] = 'ضعيف';
				$postdata['Appreciation_English'] = 'Poor';
			} elseif ($Grade_100 >= 50 && $Grade_100 <= 64) {
				$postdata['Appreciation_Arabic'] = 'مقبول';
				$postdata['Appreciation_English'] = 'Acceptable';
			} elseif ($Grade_100 >= 65 && $Grade_100 <= 79) {
				$postdata['Appreciation_Arabic'] = 'جيد';
				$postdata['Appreciation_English'] = 'Good';
			} elseif ($Grade_100 >= 80 && $Grade_100 <= 89) {
				$postdata['Appreciation_Arabic'] = 'جيد جدا';
				$postdata['Appreciation_English'] = 'Very Good';
			} elseif ($Grade_100 >= 90 && $Grade_100 <= 100) {
				$postdata['Appreciation_Arabic'] = 'ممتاز';
				$postdata['Appreciation_English'] = 'Excellent';
			}
		}
		

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command after add public static function called
	    | ----------------------------------------------------------------------
	    | @id = last insert id
	    |
	    */
	    public function hook_after_add($id) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for manipulate data input before update data is execute
	    | ----------------------------------------------------------------------
	    | @postdata = input post data
	    | @id       = current id
	    |
	    */
	    public function hook_before_edit(&$postdata,$id) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command after edit public static function called
	    | ----------------------------------------------------------------------
	    | @id       = current id
	    |
	    */
	    public function hook_after_edit($id) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command before delete public static function called
	    | ----------------------------------------------------------------------
	    | @id       = current id
	    |
	    */
	    public function hook_before_delete($id) {
	        //Your code here

	    }

	    /*
	    | ----------------------------------------------------------------------
	    | Hook for execute command after delete public static function called
	    | ----------------------------------------------------------------------
	    | @id       = current id
	    |
	    */
	    public function hook_after_delete($id) {
	        //Your code here

	    }



	    //By the way, you can still create your own method in here... :)


	}
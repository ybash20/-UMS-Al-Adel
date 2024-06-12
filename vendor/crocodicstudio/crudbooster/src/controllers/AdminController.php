<?php namespace crocodicstudio\crudbooster\controllers;

use crocodicstudio\crudbooster\helpers\CRUDBooster;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\student;
use App\Models\Grades_Student;

class AdminController extends CBController
{
    function getIndex()
    {
        $data = [];
        $data['page_title'] = 'Dashboard';

        return view('crudbooster::home', $data);
    }

    public function getLockscreen()
    {

        if (! CRUDBooster::myId()) {
            Session::flush();

            return redirect()->route('getLogin')->with('message', cbLang('alert_session_expired'));
        }

        Session::put('admin_lock', 1);

        return view('crudbooster::lockscreen');
    }

    public function postUnlockScreen()
    {
        $id = CRUDBooster::myId();
        $password = request('password');
        $users = DB::table(config('crudbooster.USER_TABLE'))->where('id', $id)->first();

        if (\Hash::check($password, $users->password)) {
            Session::put('admin_lock', 0);

            return redirect(CRUDBooster::adminPath());
        } else {
            echo "<script>alert('".cbLang('alert_password_wrong')."');history.go(-1);</script>";
        }
    }

    public function getLogin()
    {

        if (CRUDBooster::myId()) {
            return redirect(CRUDBooster::adminPath());
        }

        return view('crudbooster::login');
    }

    public function postLogin()
    {

        $validator = Validator::make(Request::all(), [
            'email' => 'required|email|exists:'.config('crudbooster.USER_TABLE'),
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $message = $validator->errors()->all();

            return redirect()->back()->with(['message' => implode('<br>', $message), 'message_type' => 'danger']);
        }

        $email = Request::input("email");
        $password = Request::input("password");
        $users = DB::table(config('crudbooster.USER_TABLE'))->where("email", $email)->first();

        if (\Hash::check($password, $users->password)) {
            AdminController::login($users);
            return redirect(CRUDBooster::adminPath());
        } else {
            if(DB::table('password_resets')->where('email', $email)->where('active', '1')->exists()){
                $token = DB::table('password_resets')->where("email", $email)->first();
                if (\Hash::check($password, $token->token)) {
                    AdminController::login($users);
                    DB::table('password_resets')->where('email', $email)->update(['active' => '0','updated_at' => date('Y-m-d H:i:s')]);
                    return redirect(CRUDBooster::adminPath())->with(['message' => cbLang('password_reset'), 'message_type' => 'reset_password']);
                }else{
                    return redirect()->route('getLogin')->with('message', cbLang('alert_password_wrong'));
                }
            }else{
                return redirect()->route('getLogin')->with('message', cbLang('alert_password_wrong'));
            }
        }
    }
    private static function login($users){
        $priv = DB::table("ums_privileges")->where("id", $users->id_ums_privileges)->first();

        $roles = DB::table('ums_privileges_roles')->where('id_ums_privileges', $users->id_ums_privileges)->join('ums_moduls', 'ums_moduls.id', '=', 'id_ums_moduls')->select('ums_moduls.name', 'ums_moduls.path', 'is_visible', 'is_create', 'is_read', 'is_edit', 'is_delete')->get();

        $photo = ($users->photo) ? asset($users->photo) : asset('image\user.png');
        Session::put('admin_id', $users->id);
        Session::put('admin_is_manager', $priv->is_manager);
        Session::put('admin_name', $users->name);
        Session::put('admin_photo', $photo);
        Session::put('admin_privileges_roles', $roles);
        Session::put("admin_privileges", $users->id_ums_privileges);
        Session::put('admin_privileges_name', $priv->name);
        Session::put('admin_lock', 0);
        Session::put('theme_color', $users->theme_color);
        Session::put("appname", get_setting('appname'));

        CRUDBooster::insertLog(cbLang("log_login"), ['email' => $users->email, 'ip' => Request::server('REMOTE_ADDR')]);

        $cb_hook_session = new \App\Http\Controllers\CBHook;
        $cb_hook_session->afterLogin();
    }

    public function getForgot()
    {
        if (CRUDBooster::myId()) {
            return redirect(CRUDBooster::adminPath());
        }

        return view('crudbooster::forgot');
    }

    public function postForgot()
    {
        $validator = Validator::make(Request::all(), [
            'email' => 'required|email|exists:'.config('crudbooster.USER_TABLE'),
        ]);

        if ($validator->fails()) {
            $message = $validator->errors()->all();
            return redirect()->back()->with(['message' => implode('<br>', $message), 'message_type' => 'danger']);
        }
        try{

            $user = CRUDBooster::first(config('crudbooster.USER_TABLE'), ['email' => g('email')]);
            $rand_string = str_random(12);
            $user->password = $rand_string;
            CRUDBooster::sendEmail(['to' => $user->email, 'data' => $user, 'template' => 'forgot_password_backend']);
            $password = \Hash::make($rand_string);

            if(DB::table("password_resets")->where('email', g('email'))->exists()){
                DB::table("password_resets")->where('email', $user->email)->update(['token' => $password,'updated_at' => date('Y-m-d H:i:s')]);
            }else{
                DB::table("password_resets")->insert(['email' => $user->email,'token' => $password,'active' => '1','created_at' => date('Y-m-d H:i:s')]);
            }

            CRUDBooster::insertLog(cbLang("log_forgot"), ['email' => g('email'), 'ip' => Request::server('REMOTE_ADDR')]);
            return redirect()->route('getLogin')->with('message', cbLang("email_sending_done"));
        } catch (\Exception $e) {
            $message = $e->getMessage();
            CRUDBooster::insertLog(cbLang('email_sending_failed').'Password Forgot', $message);
            return redirect()->back()->with(['message' => cbLang('email_sending_failed'), 'type' => 'danger']);
        }
    }

    public function checkEmail()
    {
        $validator = Validator::make(Request::all(), [
            'email' => 'required|email',
        ], [
            'email.required' => cbLang('email_required'),
            'email.email' => cbLang('email_incorrect'),
        ]);
        if ($validator->fails()) {
            $message = $validator->errors()->all();
            return response()->json(['message' => implode('<br>', $message), 'type' => 'error']);
        }
        try {
            $rand_string = mt_rand(999999, 9999999);
            $data = ['code' => $rand_string, 'email' => g('email')];
            CRUDBooster::sendEmail(['to' => g('email'), 'data' => $data, 'template' => 'check_email']);
            $data['code'] = \Hash::make($rand_string);

            if(DB::table('email_check')->where('email', $data['email'])->exists()){
                DB::table('email_check')->where('email', $data['email'])->update(['code' => $data['code'],'updated_at' => date('Y-m-d H:i:s')]);
            }else{
                DB::table('email_check')->insert(['email' => $data['email'],'code' => $data['code'],'created_at' => date('Y-m-d H:i:s')]);
            }
            Session::put('email', g('email'));

            CRUDBooster::insertLog(cbLang("email_sending_done"), ['email' => g('email'), 'ip' => Request::server('REMOTE_ADDR')]);
            return response()->json(['message' => cbLang("email_sending_done"), 'type' => 'success']);
        } catch (\Exception $e) {
            $message = $e->getMessage();
            CRUDBooster::insertLog('Check Email: '.cbLang('email_sending_failed'), ['message' => $message, 'email' => g('email'), 'ip' => Request::server('REMOTE_ADDR')]);
            return response()->json(['message' => cbLang('email_sending_failed'), 'type' => 'error']);
        }
    }
    public function checkCode()
    {
        CRUDBooster::insertLog('the code',g('code'));
        CRUDBooster::insertLog('the email',Session::get('email'));
        $validator = Validator::make(Request::all(), [
            'code' => 'required|integer|between:99999,999999',
        ], [
            'code.required' => cbLang('code_required'),
            'code.integer' => cbLang('email_check_code_failed'),
            'code.between' => cbLang('email_check_code_failed'),
        ]);
        if ($validator->fails()) {
            $message = $validator->errors()->all();
            return response()->json(['message' => implode('<br>', $message), 'type' => 'error']);
        }
        try {
            $email = Session::get('email');
            $user = DB::table('email_check')->where('email', $email)->first();
            $code = g('code');
            if (\Hash::check($code, $user->code)) {
                DB::table('email_check')->where('email', $email)->delete();
                CRUDBooster::insertLog($email.' '.cbLang("email_check_code_done"), ['email' => $email, 'ip' => Request::server('REMOTE_ADDR')]);
                return response()->json(['message' => cbLang("email_check_code_done"), 'type' => 'success']);
            }
            else{
                CRUDBooster::insertLog(cbLang('email_check_code_failed'), 'code is invalid');
                return response()->json(['message' => cbLang('email_check_code_failed'), 'type' => 'error']);
            }
        } catch (\Exception $e) {
            $message = $e->getMessage();
            CRUDBooster::insertLog(cbLang('email_check_code_failed'), $message);
            return response()->json(['message' => cbLang('email_check_code_failed'), 'message_type' => 'error']);
        }
    }



    public function getLogout()
    {

        $me = CRUDBooster::me();
        CRUDBooster::insertLog(cbLang("log_logout"), ['email' => $me->email]);

        Session::flush();

        return redirect()->route('getLogin')->with('message', cbLang("message_after_logout"));
    }




     public function StudentgetLogin()
    {
        if (Session::has('student_id')) {
            return redirect('/student');
        }
        return view('crudbooster::login'); // تأكد من أن اسم البليد الصحيح هو student_login
    }

    public function StudentpostLogin()
    {
        $validator = Validator::make(Request::all(), [
            'id' => 'required|numeric|exists:students,id',
            'Code' => 'required|string',
        ]);

        if ($validator->fails()) {
            $message = $validator->errors()->all();
            return redirect()->back()->with(['message' => implode('<br>', $message), 'message_type' => 'danger']);
        }

        $id = Request::input("id");
        $code = Request::input("Code");
        $student = Student::where('id', $id)->first();

        if ($student && $student->Code === $code) {
            // تسجيل الدخول بنجاح
            Session::put('student_id', $student->id);
            Session::put('student_Email', $student->Email);
            Session::put('student_code', $student->Code);

            return redirect('/student')->with('message', cbLang('student_login_success'));
        } else {
            return redirect('/admin/login')->with('message', cbLang('student_login_failed'));
        }
    }

    public function StudentgetLogout()
    {
        Session::flush();
        return redirect('/admin/login')->with('message',cbLang('logout_student_success'));
    }


    public function StudentGrades()
    {
        $student_id = session('student_id'); // استخدام معرف الطالب من الجلسة

        // جلب الدرجات الخاصة بالطالب
        $grades = Grades_Student::with('course')
                    ->where('Student_ID', $student_id)
                    ->get();
                    foreach ($grades as $total) {
                        $total->Grade_100 = $total->Grade_30 + $total->Grade_70;
                    }
                             

        return view('grades', compact('grades'));
    }

    public function StudentStudyplan()
    {
        return view('studyplan');
    }

    public function StudentTimetables()
    {
        return view('timetables');
    }

}

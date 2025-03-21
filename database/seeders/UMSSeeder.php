<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UMSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Please wait updating the data...');
        # User
        if (DB::table('ums_users')->count() == 0) {
            $password = Hash::make('123456');
            $ums_users = DB::table('ums_users')->insert([
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Manager',
                'email' => 'admin@ums.com',
                'password' => $password,
                'theme_color' => 'skin-blue-light',
                'id_ums_privileges' => 1,
                'Status' => 'Active',
            ]);
            DB::table('ums_users')->insert([
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Ayman Ali',
                'email' => 'ayman.405060@gmail.com',
                'password' => $password,
                'theme_color' => 'skin-blue',
                'id_ums_privileges' => 1,
                'Status' => 'Active',
            ]);
        }
        $this->command->info("Create users completed");
        # User End

        # Email Templates
        DB::table('ums_email_templates')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'name' => 'Email Template Forgot Password Backend',
            'slug' => 'forgot_password_backend',
            'subject' => 'Reset Password',
            'content' => '<p>Hi,</p><p>Someone requested forgot password, here is your new password : </p><p>[password]</p><p><br></p><p>--</p><p>Regards,</p><p>Admin</p>',
            'description' => '[password]',
            'from_name' => 'UMS',
            'from_email' => '',
            'cc_email' => null,
        ]);
        DB::table('ums_email_templates')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'name' => 'Checking Email',
            'slug' => 'check_email',
            'subject' => 'Check email address',
            'content' => '<h1 style="font-family: Arial, Helvetica, sans-serif; font-size: 32px; line-height: 36px; padding-bottom: 10px; color: rgb(51, 51, 51); text-align: center;">تحقق من عنوان البريد الإلكتروني الخاص بك</h1><div style="font-family: Arial, Helvetica, sans-serif; font-size: 17px; line-height: 25px; color: rgb(51, 51, 51);"><p>لقد قمت مؤخرًا بتحديد&nbsp;<b style="font-size: 18px;">[email]</b>&nbsp;كبريدك الكتروني. للتحقق من أن عنوان البريدالإلكتروني هذا ينتمي لك، قم بإدخال الرمز أدناه على صفحة التحقق من البريد الإلكتروني:</p><div style="font-size: 23px; line-height: 25px;"><b>[code]</b></div><p><b>لماذا تلقيت هذا البريد الإلكتروني؟</b><br>يطلب UMS التحقق من البريد عند تحديد عنوان بريد إلكتروني. لا يمكن استخدام البريد إلكتروني الخاص بك حتى تقوم بالتحقق منه.</p><p>إذا لم تقم بإجراء هذه التغييرات أو إذا كنت تعتقد أن شخصًا غير مصرح له قد قام بالوصول إلى حسابك، فيتعين عليك تغيير كلمة السر الخاصة بك في أقرب وقت ممكن من صفحة الحساب</p><p>مع تحيات،</p><p>UMS Developers</p></div>',
            'description' => 'Check the authenticity of your email address',
            'from_name' => 'UMS',
            'from_email' => '',
            'cc_email' => null,
        ]);
        $this->command->info("Create email templates completed");

        # UMS Modules
        $data = [
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Notifications',
                'icon' => 'fa fa-cog',
                'path' => 'notifications',
                'table_name' => 'ums_notifications',
                'controller' => 'NotificationsController',
                'is_protected' => 0,
                'is_active' => 1,
            ],
            [

                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Privileges',
                'icon' => 'fa fa-cog',
                'path' => 'privileges',
                'table_name' => 'ums_privileges',
                'controller' => 'PrivilegesController',
                'is_protected' => 0,
                'is_active' => 1,
            ],
            [

                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Privileges Roles',
                'icon' => 'fa fa-cog',
                'path' => 'privileges_roles',
                'table_name' => 'ums_privileges_roles',
                'controller' => 'PrivilegesRolesController',
                'is_protected' => 1,
                'is_active' => 1,
            ],
            [

                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Users Management',
                'icon' => 'fa fa-users',
                'path' => 'users',
                'table_name' => 'ums_users',
                'controller' => 'AdminUmsUsersController',
                'is_protected' => 0,
                'is_active' => 1,
            ],
            [

                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Settings',
                'icon' => 'fa fa-cog',
                'path' => 'settings',
                'table_name' => 'ums_settings',
                'controller' => 'SettingsController',
                'is_protected' => 0,
                'is_active' => 1,
            ],
            [

                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Module Generator',
                'icon' => 'fa fa-database',
                'path' => 'module_generator',
                'table_name' => 'ums_moduls',
                'controller' => 'ModulsController',
                'is_protected' => 0,
                'is_active' => 1,
            ],
            [

                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Menu Management',
                'icon' => 'fa fa-bars',
                'path' => 'menu_management',
                'table_name' => 'ums_menus',
                'controller' => 'MenusController',
                'is_protected' => 0,
                'is_active' => 1,
            ],
            [

                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Email Templates',
                'icon' => 'fa fa-envelope-o',
                'path' => 'email_templates',
                'table_name' => 'ums_email_templates',
                'controller' => 'EmailTemplatesController',
                'is_protected' => 0,
                'is_active' => 1,
            ],
            [

                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Statistic Builder',
                'icon' => 'fa fa-dashboard',
                'path' => 'statistic_builder',
                'table_name' => 'ums_statistics',
                'controller' => 'StatisticBuilderController',
                'is_protected' => 0,
                'is_active' => 1,
            ],
            [

                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'API Generator',
                'icon' => 'fa fa-cloud-download',
                'path' => 'api_generator',
                'table_name' => '',
                'controller' => 'ApiCustomController',
                'is_protected' => 1,
                'is_active' => 1,
            ],
            [

                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Log User Access',
                'icon' => 'fa fa-flag-o',
                'path' => 'logs',
                'table_name' => 'ums_logs',
                'controller' => 'LogsController',
                'is_protected' => 0,
                'is_active' => 1,
            ],
        ];

        foreach ($data as $k => $d) {
            if (DB::table('ums_moduls')->where('name', $d['name'])->count()) {
                unset($data[$k]);
            }
        }

        DB::table('ums_moduls')->insert($data);
        $this->command->info("Create default UMS modules completed");
        # UMS Modules End


        # UMS Setting
        $data = [

            //LOGIN REGISTER STYLE
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'login_background_color',
                'label' => 'Login Background Color',
                'content' => null,
                'content_input_type' => 'text',
                'group_setting' => 'login_register_style',
                'dataenum' => null,
                'helper' => 'Input hexacode',
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'login_font_color',
                'label' => 'Login Font Color',
                'content' => null,
                'content_input_type' => 'text',
                'group_setting' => 'login_register_style',
                'dataenum' => null,
                'helper' => 'Input hexacode',
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'login_background_image',
                'label' => 'Login Background Image',
                'content' => null,
                'content_input_type' => 'upload_image',
                'group_setting' => 'login_register_style',
                'dataenum' => null,
                'helper' => null,
            ],

            //EMAIL SETTING
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'email_sender',
                'label' => 'Email Sender',
                'content' => 'bilal14Hasil14@gmail.com',
                'content_input_type' => 'text',
                'group_setting' => 'email_setting',
                'dataenum' => null,
                'helper' => null,
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'smtp_driver',
                'label' => 'Mail Driver',
                'content' => 'smtp',
                'content_input_type' => 'select',
                'group_setting' => 'email_setting',
                'dataenum' => 'smtp',
                'helper' => null,
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'smtp_host',
                'label' => 'SMTP Host',
                'content' => 'smtp.gmail.com',
                'content_input_type' => 'text',
                'group_setting' => 'email_setting',
                'dataenum' => null,
                'helper' => null,
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'smtp_port',
                'label' => 'SMTP Port',
                'content' => '587',
                'content_input_type' => 'text',
                'group_setting' => 'email_setting',
                'dataenum' => null,
                'helper' => 'default 25',
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'smtp_username',
                'label' => 'SMTP Username',
                'content' => 'bilal14Hasil14@gmail.com',
                'content_input_type' => 'text',
                'group_setting' => 'email_setting',
                'dataenum' => null,
                'helper' => null,
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'smtp_password',
                'label' => 'SMTP Password',
                'content' => 'dkagorcvfjnkkkuv',
                'content_input_type' => 'text',
                'group_setting' => 'email_setting',
                'dataenum' => null,
                'helper' => null,
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'smtp_encryption',
                'label' => 'SMTP Encryption',
                'content' => 'tls',
                'content_input_type' => 'text',
                'group_setting' => 'email_setting',
                'dataenum' => null,
                'helper' => null,
            ],

            //APPLICATION SETTING
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'appname',
                'label' => 'Application Name',
                'group_setting' => 'application_setting',
                'content' => 'UMS',
                'content_input_type' => 'text',
                'dataenum' => null,
                'helper' => null,
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'default_paper_size',
                'label' => 'Default Paper Print Size',
                'group_setting' => 'application_setting',
                'content' => 'Legal',
                'content_input_type' => 'text',
                'dataenum' => null,
                'helper' => 'Paper size, ex : A4, Legal, etc',
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'logo',
                'label' => 'Logo',
                'content' => '',
                'content_input_type' => 'upload_image',
                'group_setting' => 'application_setting',
                'dataenum' => null,
                'helper' => null,
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'favicon',
                'label' => 'Favicon',
                'content' => '',
                'content_input_type' => 'upload_image',
                'group_setting' => 'application_setting',
                'dataenum' => null,
                'helper' => null,
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'api_debug_mode',
                'label' => 'API Debug Mode',
                'content' => 'true',
                'content_input_type' => 'select',
                'group_setting' => 'application_setting',
                'dataenum' => 'true,false',
                'helper' => null,
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'google_api_key',
                'label' => 'Google API Key',
                'content' => '',
                'content_input_type' => 'text',
                'group_setting' => 'application_setting',
                'dataenum' => null,
                'helper' => null,
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'google_fcm_key',
                'label' => 'Google FCM Key',
                'content' => '',
                'content_input_type' => 'text',
                'group_setting' => 'application_setting',
                'dataenum' => null,
                'helper' => null,
            ],
        ];

        foreach ($data as $row) {
            $count = DB::table('ums_settings')->where('name', $row['name'])->count();
            if ($count) {
                if ($count > 1) {
                    $newsId = DB::table('ums_settings')->where('name', $row['name'])->orderby('id', 'asc')->take(1)->first();
                    DB::table('ums_settings')->where('name', $row['name'])->where('id', '!=', $newsId->id)->delete();
                }
                continue;
            }
            DB::table('ums_settings')->insert($row);
        }
        $this->command->info("Create UMS settings completed");
        # UMS Setting End

        # UMS Privilege
        if (DB::table('ums_privileges')->where('name', 'Manager')->count() == 0) {
            DB::table('ums_privileges')->insert([
                'created_at' => date('Y-m-d H:i:s'),
                'name' => 'Manager',
                'is_manager' => 1,
            ]);
        }
        if (DB::table('ums_privileges_roles')->count() == 0) {
            $modules = DB::table('ums_moduls')->get();
            $i = 1;
            foreach ($modules as $module) {

                $is_visible = 1;
                $is_create = 1;
                $is_read = 1;
                $is_edit = 1;
                $is_delete = 1;

                switch ($module->table_name) {
                    case 'ums_logs':
                        $is_create = 0;
                        $is_edit = 0;
                        break;
                    case 'ums_privileges_roles':
                        $is_visible = 0;
                        break;
                    case 'ums_apicustom':
                        $is_visible = 0;
                        break;
                    case 'ums_notifications':
                        $is_create = $is_read = $is_edit = $is_delete = 0;
                        break;
                }

                DB::table('ums_privileges_roles')->insert([
                    'created_at' => date('Y-m-d H:i:s'),
                    'is_visible' => $is_visible,
                    'is_create' => $is_create,
                    'is_edit' => $is_edit,
                    'is_delete' => $is_delete,
                    'is_read' => $is_read,
                    'id_ums_privileges' => 1,
                    'id_ums_moduls' => $module->id,
                ]);
                $i++;
            }
        }
        $this->command->info("Create roles completed");
        # UMS Privilege End

        $this->command->info('All ums seeders completed !');
    }
}

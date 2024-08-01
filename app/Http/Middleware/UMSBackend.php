<?php

namespace App\Http\Middleware;

use Closure;
use UMS;
use DB;

class UMSBackend
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $admin_path = config('ums.ADMIN_PATH') ?: 'admin';

        if (UMS::myId() == '') {
            $url = url($admin_path.'/login');

            return redirect($url)->with('message', lang('not_logged_in'));
        }
        if (UMS::isLocked()) {
            $url = url($admin_path.'/lock-screen');

            return redirect($url);
        }
        if($request->url()==UMS::adminPath('')){
            $menus=DB::table('ums_menus')->whereRaw("ums_menus.id IN (select id_ums_menus from ums_menus_privileges where id_ums_privileges = '".UMS::myPrivilegeId()."')")->where('is_dashboard', 1)->where('is_active', 1)->first();
            if ($menus) {
                if ($menus->type == 'Statistic') {
                    return redirect()->route('StatisticBuilderControllerGetDashboard');
                } elseif ($menus->type == 'Module') {
                    $module = UMS::first('ums_moduls', ['path' => $menus->path]);
                    return redirect()->action( $module->controller.'@getIndex');
                } elseif ($menus->type == 'Route') {
                    $action = str_replace("Controller", "Controller@", $menus->path);
                    $action = str_replace(['Get', 'Post'], ['get', 'post'], $action);
                    return redirect()->action($action);
                } elseif ($menus->type == 'Controller & Method') {
                    return redirect()->action($menus->path);
                } elseif ($menus->type == 'URL') {
                    return redirect($menus->path);
                }
            }
        }

        return $next($request);
    }
}

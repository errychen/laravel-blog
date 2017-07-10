<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Menu;
use Route;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        echo $sign =  Route::currentRouteName();
        $all = Menu::where('sign', '=', $sign)->first();
        if( empty($all) ) {
            echo '没有权限访问';
            return false;
        }

        return $next($request);
    }
}

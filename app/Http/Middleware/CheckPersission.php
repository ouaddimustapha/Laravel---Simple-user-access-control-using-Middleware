<?php


namespace App\Http\Middleware;


use Closure;
use App\Http\Controllers\Auth\LoginController;


class CheckPermission

{

    /**

     * Handle an incoming request.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \Closure  $next

     * @return mixed

     */

    public function handle($request, Closure $next, $permission)

    {

        $permission = explode('|', $permission);


        

        if(checkPermission($permission)){

            return $next($request);

        }


        return response()->view('errors.check-permission');

    }

}
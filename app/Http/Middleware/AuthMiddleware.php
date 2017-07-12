<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use App\User;
use Closure;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {
    //     return $next($request);
    // }

    public function handle($request, Closure $next)
    {
        if ( !Auth::check())
        {
          flash('Bu sayfaya erişebilmek için giriş yapmalısınız.')->error();
            //Flash::error('Sayfaya Erişmek İçin Yetkiniz Yok');
            return redirect()->route('admin.login');
        }else{
            // if (!$this->user->find($this->auth->user()->id)->hasRole(1)){
            //     Flash::error(trans('whole::http/middleware.is_admin_error'));
            //     return redirect()->route('admin.login');
            // }
        }
        return $next($request);
    }
}

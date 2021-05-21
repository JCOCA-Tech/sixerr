<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */


    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                //return Redirect::back();
                //return Redirect::intended();
                return redirect()->intended('/home');
                //return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }

    /**
     *public function handle($request, Closure $next, $guard = null)
     *{
     *if (Auth::guard($guard)->check()) {
     *    return redirect()->intended('/home');
     *}
     *
     *return $next($request);
     *}
     */
}

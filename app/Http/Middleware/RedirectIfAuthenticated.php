<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                /** @var User $user */
                $user = Auth::guard($guard);

                // to admin dashboard
                if($user->hasRole('admin')) {
                    return redirect(RouteServiceProvider::ADMIN_DASHBOARD);
                }

                // to user dashboard
                else if($user->hasRole('user')) {
                     return redirect(RouteServiceProvider::HOME);
                }
            }
        }
        return $next($request);
    }
}

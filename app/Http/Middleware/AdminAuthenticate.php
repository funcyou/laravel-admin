<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @param  string|null              $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /**
         * @var $manager User
         */
        if (Auth::guard('admin')->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('ad/account/login');
            }
        }
        $manager = $request->user('admin');
//        $route   = $request->route()->getName();
//        if (!$route) {
//            return $next($request);
//        }
//        if ($route && !$manager->can($route)) {
//            if ($request->ajax() || $request->wantsJson()) {
//                return response()->json(['status' => 401, 'message' => '没有权限!']);
//            } else {
//                return redirect()->back()->withErrors(['message' => '没有权限!']);
//            }
//        }

        return $next($request);
    }
}

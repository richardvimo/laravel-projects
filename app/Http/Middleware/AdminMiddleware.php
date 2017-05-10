<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if ( $request->user()===null ) {
            return response("insufficient permission",401);
        }

        $usuarioActual = \Auth::user();
        $actions = $request->route()->getAction();

        $roles = isset($actions['roles']) ? $actions['roles'] : null;

        if ($request->user()->hasAnyRole($roles) || !$roles ) {
            return $next($request);
        }
        return response("insufficient permission",401);

        /*foreach ($usuarioActual->roles as $role) {
            if ($role->name == 'admin') {
                return $next($request);
            }
        }
        return redirect('admin/teacher');*/
    }
}

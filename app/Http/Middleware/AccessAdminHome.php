<?php

namespace App\Http\Middleware;

use Closure;

class AccessAdminHome
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

        $user = $request->user();

        if ($user && $user->position == 'System Administrator') {

            return $next($request);
        }

        abort(404, 'not authorized');
    }
}

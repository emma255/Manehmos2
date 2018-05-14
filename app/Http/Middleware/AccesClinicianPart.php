<?php

namespace App\Http\Middleware;

use Closure;

class AccesClinicianPart
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

        if ($user && $user->position == 'Clinical Attendant') {

            return $next($request);
        }
        abort(404, 'not authorized');
    }
}

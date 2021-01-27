<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;
use View;

class auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('id')) {
            session::flash('error', 'warning');
            session::flash('message', 'Access Denied! Please Login First');
            return Redirect('/');
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class OrganiserMiddleware
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
        if($request->user() && $request->user()->type != 'organiser'){
            return new Response(view('unauthorized') ->with ('role', 'ORGANISER'));
        }
        
        return $next($request);
    }
}

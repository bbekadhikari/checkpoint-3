<?php

namespace App\Http\Middleware;

use Closure;

class adminType
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
        if(auth('admin')->user()->type =='editor')
        {

            flash('!! Access Denied !!','danger');
            return redirect()->route('admin.home');
        }
        elseif (auth('admin')->user()->type =='kitchen')
        {

            flash('!! Access Denied !!','danger');
            return redirect()->route('admin.home');
        }
        return $next($request);
    }
}

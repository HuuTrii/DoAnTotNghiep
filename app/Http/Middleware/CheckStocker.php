<?php

namespace App\Http\Middleware;

use Closure;

class CheckStocker
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
        if($request->user() && $request->user()->role_id == 2){
            return $next($request);
        }else{
            return redirect('page.loi.error');
        }
    }
}

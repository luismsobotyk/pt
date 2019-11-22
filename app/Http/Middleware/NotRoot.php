<?php

namespace App\Http\Middleware;

use Closure;

class NotRoot
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
        if ($request->user()->email == env('USER_ROOT_MAIL')) {
            return redirect('root');
        }else{
            return $next($request);
        }
    }
}

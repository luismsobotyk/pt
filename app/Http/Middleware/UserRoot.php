<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class UserRoot
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
            return $next($request);
        }else{
            return redirect('home');
        }
    }
}

<?php

namespace App\Http\Middleware;

use App\Http\Controllers\NotificationsController;
use Closure;

class NotificationsMiddleware
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
        NotificationsController::getInstance();
        return $next($request);
    }
}

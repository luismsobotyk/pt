<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $notifications = "";

    /**
     * Controller constructor.
     */
    public function __construct(){
        $this->checkNotifications();
    }

    private function checkNotifications(){
        $this->notifications = Notification::all();
        dd($this->notifications);
        View::share('notifications', $this->notifications);
    }
}

<?php


namespace App\Http\Controllers;


use App\Models\Notification;

class NotificationsController extends Controller
{

    private static $NotificationsController;
    private static $notifications;

    protected function __construct()
    {
        parent::__construct();
        self::$notifications = $this->readNotifications();
    }

    protected function __clone()
    {
    }

    protected function __wakeup()
    {
    }

    public static function getInstance(): NotificationsController
    {
        if (self::$NotificationsController === null) {
            self::$NotificationsController = new self();
        }
        return self::$NotificationsController;
    }

    /**
     * @param $to
     * @param $message
     * @param null $from
     * @return Notification
     */
    public function newNotification($to, $message, $from = null) : Notification
    {
        $notif = new Notification;
        $notif->from_user_id = $from;
        $notif->to_user_id = $to;
        $notif->message = $message;
        $notif->read = false;
        $notif->save();
        return $notif;
    }

    /**
     * Recupera as notificações e as disponibiliza para todas as views
     * @return Notification[]|\Illuminate\Database\Eloquent\Collection
     */
    protected function readNotifications()
    {
        $ntfs = Notification::all();
        view()->share('notifications', $ntfs);
        return $ntfs;
    }

    public function getNotification(){
        return self::$notifications;
    }

    public function setNotificationAsRead($notification_id) : Notification
    {
        $notif = Notification::find($notification_id);
        $notif->read = true;
        $notif->save();
        return $notif;
    }

}
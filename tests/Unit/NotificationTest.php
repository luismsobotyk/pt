<?php

namespace Tests\Unit;

use App\Http\Controllers\NotificationsController;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class NotificationTest extends TestCase
{
    protected $NotfClr;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->NotfClr = NotificationsController::getInstance();
    }

    public function testNewNotification()
    {
        $notif = $this->NotfClr->newNotification(
            1,
            'Teste unitário',
            null
        );
        $this->assertTrue(is_integer($notif->id));
    }

    public function testReadNotifications()
    {
        $notifications = $this->NotfClr->readNotifications();
        $this->assertEquals("object", gettype($notifications));
    }

    public function testSetNotificationAsRead()
    {
        $notif = $this->NotfClr->setNotificationAsRead(17);
        $this->assertEquals(true, $notif->read);
    }
}

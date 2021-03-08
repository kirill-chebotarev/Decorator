<?php


namespace Notification;

use Decorator\Decorator;
use Contract\INotification;

class CN extends Decorator implements INotification
{
    public function render()
    {
        $data = $this->notification->render();
        echo "Отправка уведомления с заголовком '{$data['title']}'
                получателю {$data['recipient']} через Chrome notification";
        return $data;
    }
}
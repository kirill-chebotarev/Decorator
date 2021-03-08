<?php


namespace Notification;


use Decorator\Decorator;
use Contract\INotification;

class Sms extends Decorator implements INotification
{
    public function render()
    {
        $data = $this->notification->render();
        echo  "Отправка уведомления с заголовком '{$data['title']}'
                по sms на номер {$this->getPhoneNumber($data['recipient'])}";
        return $data;
    }

    private function getPhoneNumber($recipient)
    {
        $phoneNumber = '';
        if ($recipient) {
            $phoneNumber = '12345678910';
        }
        return $phoneNumber;
    }
}
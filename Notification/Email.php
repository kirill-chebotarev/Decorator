<?php


namespace Notification;


use Decorator\Decorator;
use Contract\INotification;

class Email extends Decorator implements INotification
{
    public function render()
    {
        $data = $this->notification->render();
        echo "Отправка уведомления с заголовком '{$data['title']}'
                по email {$this->getEmail($data['recipient'])}";
        return $data;
    }

    private function getEmail($recipient)
    {
        $email ='';
        if ($recipient) {
            $email = 'test@gmail.com';
        }
        return $email;
    }
}
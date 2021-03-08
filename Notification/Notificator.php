<?php


namespace Notification;

use Contract\INotification;


class Notificator implements INotification
{
    protected $recipient;
    protected $title;
    protected $content;

    public function __construct($recipient,$title,$content)
    {
        $this->recipient = $recipient;
        $this->title = $title;
        $this->content = $content;
    }

    public function render()
    {
        return [
            'recipient' => $this->recipient,
            'title' => $this->title,
            'content' => $this->content
        ];
    }

}
<?php


namespace Decorator;


use Contract\INotification;

abstract class Decorator implements INotification
{
    protected $notification;

    public function __construct(INotification $notification)
    {
        $this->notification = $notification;
    }

}
<?php

use \Notification\CN;
use \Notification\Email;
use \Notification\Sms;
use \Notification\Notificator;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);

    require_once __DIR__.'\\'.$className.'.php';
});

$notificationSms = new Sms(new Notificator("получатель", "заголовок", "контент"));
$notificationSms->render();

echo '<br>';

$notificationAll = new Sms(
                    new Email(
                        new CN(new Notificator("получатель", "заголовок", "контент"))
                    )
);
$notificationAll->render();

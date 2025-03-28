<?php

namespace App\Models;

class PushNotification implements Notification
{
    private string $message;

    public function __construct(string $message)
    {
        // Voeg hier de implementatie toe om een PushNotification te maken
    }

    public function send(): bool
    {
        // Voeg hier de implementatie toe om een PushNotification te versturen
    }
}

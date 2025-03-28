<?php

namespace App\Models;

class SMSNotification implements Notification
{
  // Add your code here
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

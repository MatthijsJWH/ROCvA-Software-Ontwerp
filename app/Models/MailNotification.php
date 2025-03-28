<?php

namespace App\Models;

class MailNotification implements Notification
{
  // Add your code here
    private string $message;

    public function __construct(string $message)
    {
        // Voeg hier de implementatie toe om een MailNotification te maken
    }

    public function send(): bool
    {
        // Voeg hier de implementatie toe om een MailNotification te versturen
    }
}

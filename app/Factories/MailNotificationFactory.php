<?php

namespace App\Factories;

use App\Models\Notification;
use App\Models\MailNotification;

class MailNotificationFactory implements NotificationFactory
{
  // Add your code here
  public function createNotification(string $type, string $message): Notification
  {
    // Voeg hier de implementatie toe om een MailNotification te maken
  }
}

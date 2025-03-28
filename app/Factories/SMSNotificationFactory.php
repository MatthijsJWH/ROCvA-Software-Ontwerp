<?php

namespace App\Factories;

use App\Models\Notification;
use App\Models\SMSNotification;

class SMSNotificationFactory implements NotificationFactory
{
  // Add your code here
  public function createNotification(string $type, string $message): Notification
  {
    // Voeg hier de implementatie toe om een SMSNotificatie te maken te maken
  }
}

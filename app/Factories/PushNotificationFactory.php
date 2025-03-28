<?php

namespace App\Factories;

use App\Models\Notification;
use App\Models\PushNotification;

class PushNotificationFactory implements NotificationFactory
{
  public function createNotification(string $type, string $message): Notification
  {
    // Voeg hier de implementatie toe om een PushNotification te maken
  }
}

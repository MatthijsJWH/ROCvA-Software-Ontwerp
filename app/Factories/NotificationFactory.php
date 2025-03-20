<?php

namespace App\Factories;

use App\Models\Notification;

interface NotificationFactory
{
  public function createNotification(string $type, string $message): Notification;
}
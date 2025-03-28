<?php

namespace App\Models;

interface Notification
{
  public function __construct(string $message);

  public function send(): bool;
}

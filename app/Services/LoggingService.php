<?php

namespace App\Services;

use App\Models\User;

class LoggingService {
    private static ?LoggingService $instance = null;
    private $active = false;

    private function __construct() {
        $this->active = true;
    }

    public static function getInstance(): LoggingService {
        // TODO: Implement getInstance
    }

    public function isActive(): bool {
        return $this->active;
    }

    public function log(string $message): bool {
        // TODO: Implement log
        // Deze functie moet een logbericht wegschrijven
        // Als het loggen niet actief is moet false gereturned worden
    }
}

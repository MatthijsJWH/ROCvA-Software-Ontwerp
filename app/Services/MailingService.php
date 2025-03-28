<?php

namespace App\Services;

use App\Models\User;

class MailingService {
    private static ?MailingService $instance = null;
    private $active = false;

    private function __construct() {
        $this->active = true;
    }

    public static function getInstance(): MailingService {
        // TODO: Implement getInstance
    }

    public function isActive(): bool {
        return $this->active;
    }

    public function sendMail(User $user, string $message): bool {
        // TODO: Implement sendMail
        // Deze functie moet een mail sturen naar de gebruiker, voor dit voorbeeld mag het een echo zijn
        // De gebruiker heeft geen email adres, dus ga uit van het sturen naar de username
        // Als het mailen niet actief is moet false gereturned worden
    }
}

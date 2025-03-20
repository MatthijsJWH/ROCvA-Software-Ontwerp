<?php

namespace App\Services;

use App\Models\User;
use App\Services\DatabaseService;
use App\Services\LoggingService;
use App\Services\MailingService;

class AuthService {
    private static ?AuthService $instance = null;
    private DatabaseService $db;
    private LoggingService $logger;
    private MailingService $mailer;

    private function __construct() {
        // TODO: Implement constructor
    }

    public static function getInstance(): AuthService {
        // TODO: Implement getInstance
    }

    public function login(string $username, string $password): bool {
        // TODO: Implement login
        // De login moet gebruik maken van de DatabaseService om de gebruiker op te halen
        // De login moet gebruik maken van de LoggingService om log berichten te maken als een user inlogt of wanneer er iets niet klopt
        // De login moet gebruik maken van de MailingService om een mail te sturen als een user inlogt
        // De login moet true returnen als de gebruiker succesvol is ingelogd, anders false
        // Voor dit voorbeeld mag je uitgaan van een user met de username "admin" en password "admin"

        return false;
    }
}

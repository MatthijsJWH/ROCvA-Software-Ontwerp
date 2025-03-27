<?php

namespace App\Services;

use App\Models\User;

class DatabaseService {
    private static ?DatabaseService $instance = null;
    private string $connection = "there is no connection";

    private function __construct() {
        $this->connection = "a connection has been established";
    }

    public static function getInstance(): DatabaseService {
        if (self::$instance === null) {
            self::$instance = new DatabaseService();
        }
        return self::$instance;
    }

    public function getConnection(): string {
        return $this->connection;
    }

    public function getUser(string $username): ?User {
        // TODO: Implement getUser
        // Deze functie moet een user ophalen uit de database en returnen
        // Als de user niet bestaat moet null gereturned worden
        if ($username === "admin") {
            return new User("admin", "admin");
        }
        return null;
    }
}

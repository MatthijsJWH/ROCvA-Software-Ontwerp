<?php

namespace App\Observer;

abstract class Subject {
    // Voeg een lijst aan abonnees toe

    public function abonneren(Observer $abonnee): void {
        // Voeg een abonnee toe aan de lijst
    }

    public function afmelden(Observer $abonnee): void {
        // Verwijder een abonnee uit de lijst
    }

    protected function waarschuwen(string $message): void {
        // Stuur een bericht naar alle abonnees
    }
}

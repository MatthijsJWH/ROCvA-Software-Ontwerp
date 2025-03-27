<?php

namespace App\Observer;

use App\Observer\Subject;

class TeamEventManager extends Subject {
    public function nieuweWedstrijd(string $tegenstander, \DateTime $datum, string $locatie): void {
        // Genereer een bericht over een nieuwe wedstrijd en stuur dit naar alle abonnees
        // Gebruik de datum formatteren als 'd-m-Y' -> $datum->format('d-m-Y')
    }

    public function trainingsUpdate(string $type, \DateTime $datum, string $tijdstip): void {
        // Genereer een bericht over een training en stuur dit naar alle abonnees
        // Gebruik de datum formatteren als 'd-m-Y' -> $datum->format('d-m-Y')
    }
}

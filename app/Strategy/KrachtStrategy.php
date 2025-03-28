<?php

namespace App\Strategy;

class KrachtStrategy implements AnalyseStrategy {
    public function berekenPrestatie(array $trainingsData): float {
        // Pak de gewichten en herhalingen van de trainingsdata
        // Doe dit aan de hand van array_column met de keys 'gewicht' en 'herhalingen'
        // Maak een nieuwe array met de totale volume van de trainingsdata
        // Doe dit aan de hand van array_map met een functie die het gewicht * herhalingen doet
        // Return de som van de totale volume array

        return 0;
    }
}

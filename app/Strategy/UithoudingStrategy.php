<?php

namespace App\Strategy;

class UithoudingStrategy implements AnalyseStrategy {
    public function berekenPrestatie(array $trainingsData): float {
        // Bereken de totale afstand en tijd van de trainingsdata
        // Doe dit aan de hand van array_sum met array_column met de keys 'afstand' en 'tijd'
        // Return de totale afstand gedeeld door de totale tijd

        return 0;
    }
}

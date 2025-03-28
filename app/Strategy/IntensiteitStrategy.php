<?php

namespace App\Strategy;

class IntensiteitStrategy implements AnalyseStrategy
{
    public function berekenPrestatie(array $trainingsData): float
    {
        // Filter de hartslag uit de trainingsdata
        // Doe dit aan de hand van array_filter met een functie die de hartslag uit de trainingsdata haalt
        // Bereken het gemiddelde van de hartslag
        // Return het gemiddelde van de hartslag

        return 0;
    }
}

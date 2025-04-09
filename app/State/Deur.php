<?php

namespace App\State;

class Deur
{
    private string $currentState;

    public function __construct()
    {
        // Initialiseer de huidige staat naar 'Gesloten'.
    }

    public function getCurrentState(): string
    {
        // Retourneer de huidige staat van de deur.
    }

    public function triggerEvent(string $event): void
    {
        // Implementeer de statusovergangen op basis van de huidige staat en het evenement.
        // Als de huidige staat 'Gesloten' is en het evenement is 'ontgrendelen', verander de staat naar 'Open'.
        // Als de huidige staat 'Open' is en het evenement is 'vergrendelen', verander de staat naar 'Gesloten'.
        // Voor elk ongeldig evenement in de huidige staat, geef een foutmelding weer.

        // a test
    }
}
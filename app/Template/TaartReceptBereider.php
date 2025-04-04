<?php

namespace App\Template;

use App\Template\ReceptBereider;

/**
 * TaartReceptBereider is een specifieke implementatie van ReceptBereider
 * voor het bereiden van een taartrecept.
 */
// Deze klasse implementeert de abstracte methoden van ReceptBereider

class TaartReceptBereider extends ReceptBereider {

    // Implementeer de abstracte methode trefVoorbereidingen
    // Deze methode is verantwoordelijk voor het voorbereiden van de ingrediënten
    // voor het taartrecept. Dit kan bijvoorbeeld het maken van beslag zijn.
    // Voor het halen van de unit test wordt een echo statment verwacht met de tekst
    // "Beslag maken, oven voorverwarmen." en een newline (\n).

    protected function trefVoorbereidingen() {
        echo "Beslag maken, oven voorverwarmen.\n";
    }

    // Implementeer de abstracte methode kookBak
    // Deze methode is verantwoordelijk voor het bakken van de taart in de oven.
    // Dit kan bijvoorbeeld het plaatsen van de taart in de oven zijn.
    // Voor het halen van de unit test wordt een echo statment verwacht met de tekst
    // "Taart bakken in de oven." en een newline (\n).

    protected function kookBak() {
        echo "Taart bakken in de oven.\n";
    }

    // Implementeer de abstracte methode serveer
    // Deze methode is verantwoordelijk voor het serveren van de taart.
    // Dit kan bijvoorbeeld het snijden van de taart zijn en het toevoegen van slagroom.
    // Voor het halen van de unit test wordt een echo statment verwacht met de tekst
    // "Taart serveren met slagroom." en een newline (\n).

    protected function serveer() {
        echo "Taart serveren met slagroom.\n";
    }
}

<?php

namespace App\Template;

class PastaReceptBereider extends ReceptBereider {

    // Implementeer de abstracte methode trefVoorbereidingen
    // Deze methode is verantwoordelijk voor het voorbereiden van de ingrediënten
    // voor het pasta recept. Dit kan bijvoorbeeld het snijden van de pasta zijn.
    // Voor het halen van de unit test wordt een echo statment verwacht met de tekst
    // "Pasta snijden, saus voorbereiden." en een newline (\n).

    protected function trefVoorbereidingen() {
        echo "Pasta snijden, saus voorbereiden.\n";
    }

    // Implementeer de abstracte methode kookBak
    // Deze methode is verantwoordelijk voor het koken van de pasta en het verwarmen van de saus.
    // Dit kan bijvoorbeeld het koken van de pasta in water zijn.
    // Voor het halen van de unit test wordt een echo statment verwacht met de tekst
    // "Pasta koken, saus opwarmen." en een newline (\n).

    protected function kookBak() {
        echo "Pasta koken, saus opwarmen.\n";
    }

    // Implementeer de abstracte methode serveer
    // Deze methode is verantwoordelijk voor het serveren van de pasta met saus.
    // Dit kan bijvoorbeeld het mengen van de pasta met de saus zijn.
    // Voor het halen van de unit test wordt een echo statment verwacht met de tekst
    // "Pasta met saus serveren." en een newline (\n).

    protected function serveer() {
        echo "Pasta met saus serveren.\n";
    }
}

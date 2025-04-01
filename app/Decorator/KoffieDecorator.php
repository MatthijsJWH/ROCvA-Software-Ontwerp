<?php

namespace App\Decorator;

use App\Decorator\Koffie;

abstract class KoffieDecorator implements Koffie {
    // Implementeer de Koffie interface hier
    // Deze klasse is een abstracte decorator voor koffie
    // Het bevat een Koffie object dat wordt gedecoreerd
    // De decorator voegt extra functionaliteit toe aan het Koffie object
    // De decorator kan de beschrijving en kosten van de koffie aanpassen
    // De decorator heeft een constructor die een Koffie object accepteert
    // De decorator heeft abstracte methoden getBeschrijving en getKosten
    // die moeten worden geïmplementeerd door de subklassen
    // De decorator heeft een protected eigenschap $koffie

}

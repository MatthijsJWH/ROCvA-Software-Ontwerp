<?php

namespace App\Enums;

enum GebruikersRol: string {
    // TODO: Voeg de volgende rollen toe aan de enum
    // - ADMIN
    // - EDITOR
    // - GEBRUIKER

    // TODO: Voeg een methode toe aan de enum die de korting voor de gebruiker teruggeeft
    // - ADMIN: 30% korting
    // - EDITOR: 20% korting
    // - GEBRUIKER: 10% korting
    public function getKorting(): float {
        return 0.0;
    }
}

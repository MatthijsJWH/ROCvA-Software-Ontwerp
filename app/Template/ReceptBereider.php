<?php

namespace App\Template;

abstract class ReceptBereider {
    /**
     * @var array
     */
    // De ingrediënten die nodig zijn voor het recept
    // Dit is een array die de ingrediënten bevat die nodig zijn voor het recept
    // De array kan bijvoorbeeld gevuld zijn met strings zoals "bloem", "suiker", "eieren", etc.
    // De array kan ook gevuld zijn met objecten van een andere klasse die de ingrediënten vertegenwoordigen
    protected $ingredienten;

    /**
     * Constructor
     *
     * @param array $ingredienten
     */
    // De constructor van de klasse ReceptBereider
    // Deze constructor neemt een array van ingrediënten als parameter
    // De constructor initialiseert de $ingredienten eigenschap met de waarde van de parameter $ingredienten
    // De constructor kan bijvoorbeeld worden aangeroepen met een array van strings zoals ["bloem", "suiker", "eieren"]
    // De constructor kan ook worden aangeroepen met een array van objecten van een andere klasse die de ingrediënten vertegenwoordigen
    public function __construct(array $ingredienten) {
        $this->ingredienten = $ingredienten;
    }

    // Implementeer de bereidRecept methode
    // Deze methode is verantwoordelijk voor het bereiden van het recept
    // Het volgt de stappen in de juiste volgorde
    // De stappen zijn:
    // 1. Ingrediënten verzamelen
    // 2. Voorbereidingen treffen
    // 3. Koken of bakken
    // 4. Serveren
    // 5. Opruimen (deze stap is al gedefinieerd in de abstracte klasse)

    public function bereidRecept() {
        $this->verzamelingredienten();
        $this->trefVoorbereidingen();
        $this->kookBak();
        $this->serveer();
        $this->opruimen(); // Algemene stap in abstracte klasse
    }

    // Implementeer de verzamelingredienten methode
    // Deze methode is verantwoordelijk voor het verzamelen van de ingrediënten
    // Het kan bijvoorbeeld een echo statement zijn dat de ingrediënten weergeeft
    // Voor het halen van de unit test wordt een echo statment verwacht met de tekst
    // "Ingrediënten verzameld: " samen met de ingredienten in de array
    // met tussen de ingredienten een komma en een spatie
    // en een newline (\n).
    // Bijvoorbeeld: "Ingrediënten verzameld: bloem, suiker, eieren\n"
    // Gebruik bijvoorbeeld de functie implode om de array van ingrediënten om te zetten naar een string
    // met de juiste opmaak

    protected function verzamelingredienten() {
        echo "Ingrediënten verzameld: " . implode(", ", $this->ingredienten) . "\n"; 
    }

    abstract protected function trefVoorbereidingen();
    abstract protected function kookBak();
    abstract protected function serveer();

    protected function opruimen() {
        echo "Keuken opgeruimd.\n";
    }
}

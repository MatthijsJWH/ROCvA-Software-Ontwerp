<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Observer\TeamEventManager;
use App\Observer\Speler;
use App\Observer\Coach;

class ObserverTest extends TestCase {
    public function testSpelerOntvangtMelding() {
        $teamBeheer = new TeamEventManager();
        $speler = new Speler('Mike de Groot');

        $teamBeheer->abonneren($speler);
        $teamBeheer->nieuweWedstrijd('FC Amsterdam', new \DateTime('2024-06-15'), 'Stadion Noord');

        $this->assertCount(1, $speler->getOntvangen_meldingen());
        $this->assertStringContainsString('FC Amsterdam', $speler->getOntvangen_meldingen()[0]);
    }

    public function testMultipleObservers() {
        $teamBeheer = new TeamEventManager();
        $speler1 = new Speler('Anna de Vries');
        $speler2 = new Speler('Lucas Bakker');
        $coach = new Coach('Peter Smit');

        $teamBeheer->abonneren($speler1);
        $teamBeheer->abonneren($speler2);
        $teamBeheer->abonneren($coach);

        $teamBeheer->trainingsUpdate('Conditie', new \DateTime('2024-07-10'), '19:00');

        $this->assertCount(1, $speler1->getOntvangen_meldingen());
        $this->assertCount(1, $speler2->getOntvangen_meldingen());
        $this->assertCount(1, $coach->getOntvangen_meldingen());
    }

    public function testDetachObserver() {
        $teamBeheer = new TeamEventManager();
        $speler = new Speler('Lisa Jong');

        $teamBeheer->abonneren($speler);
        $teamBeheer->nieuweWedstrijd('Sportclub Utrecht', new \DateTime('2024-05-20'), 'Centraal Stadion');
        $teamBeheer->afmelden($speler);
        $teamBeheer->trainingsUpdate('Tactiek', new \DateTime('2024-05-25'), '18:30');

        $this->assertCount(1, $speler->getOntvangen_meldingen());
    }
}

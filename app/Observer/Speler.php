<?php

namespace App\Observer;

use App\Observer\Observer;

class Speler implements Observer {
    private string $naam;
    private array $ontvangen_meldingen = [];

    public function __construct(string $naam) {
        $this->naam = $naam;
    }

    public function update(string $message): void {
        $this->ontvangen_meldingen[] = $message;
    }

    public function getOntvangen_meldingen(): array {
        return $this->ontvangen_meldingen;
    }

    public function getNaam(): string {
        return $this->naam;
    }
}

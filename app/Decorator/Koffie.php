<?php

namespace App\Decorator;

interface Koffie {
    public function getBeschrijving(): string;
    public function getKosten(): float;
}

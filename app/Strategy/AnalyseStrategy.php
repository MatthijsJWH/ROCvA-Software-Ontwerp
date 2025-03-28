<?php

namespace App\Strategy;

interface AnalyseStrategy {
    public function berekenPrestatie(array $trainingsData): float;
}

<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Strategy\SporterPrestatieAnalyse;
use App\Strategy\UithoudingStrategy;
use App\Strategy\IntensiteitStrategy;
use App\Strategy\KrachtStrategy;

class StrategyTest extends TestCase {
    public function testUithoudingStrategy() {
        $analyse = new SporterPrestatieAnalyse();
        $analyse->zetStrategie(new UithoudingStrategy());

        $trainingsData = [
            ['afstand' => 5, 'tijd' => 30],
            ['afstand' => 10, 'tijd' => 60],
            ['hartslag' => 120],
            ['hartslag' => 140],
            ['gewicht' => 50, 'herhalingen' => 10],
            ['gewicht' => 60, 'herhalingen' => 8]
        ];

        $prestatie = $analyse->analyserenPrestatie($trainingsData);
        $this->assertEquals(1/6, $prestatie);
    }

    public function testIntensiteitStrategy() {
        $analyse = new SporterPrestatieAnalyse();
        $analyse->zetStrategie(new IntensiteitStrategy());

        $trainingsData = [
            ['afstand' => 5, 'tijd' => 30],
            ['afstand' => 10, 'tijd' => 60],
            ['hartslag' => 120],
            ['hartslag' => 140],
            ['gewicht' => 50, 'herhalingen' => 10],
            ['gewicht' => 60, 'herhalingen' => 8]
        ];

        $prestatie = $analyse->analyserenPrestatie($trainingsData);
        $this->assertEquals(130, $prestatie);
    }

    public function testKrachtStrategy() {
        $analyse = new SporterPrestatieAnalyse();
        $analyse->zetStrategie(new KrachtStrategy());

        $trainingsData = [
            ['afstand' => 5, 'tijd' => 30],
            ['afstand' => 10, 'tijd' => 60],
            ['hartslag' => 120],
            ['hartslag' => 140],
            ['gewicht' => 50, 'herhalingen' => 10],
            ['gewicht' => 60, 'herhalingen' => 8]
        ];

        $prestatie = $analyse->analyserenPrestatie($trainingsData);
        $this->assertEquals(980, $prestatie);
    }
}

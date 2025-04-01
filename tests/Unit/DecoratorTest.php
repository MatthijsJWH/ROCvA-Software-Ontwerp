<?php

use PHPUnit\Framework\TestCase;

use App\Decorator\BasisKoffie;
use App\Decorator\MelkDecorator;
use App\Decorator\SuikerDecorator;
use App\Decorator\Koffie;
use App\Decorator\KoffieDecorator;

class DecoratorTest extends TestCase
{
    public function testBasisKoffieKosten()
    {
        $koffie = new BasisKoffie();
        $this->assertEquals(2.0, $koffie->getKosten());
    }

    public function testBasisKoffieBeschrijving()
    {
        $koffie = new BasisKoffie();
        $this->assertEquals("Basis koffie", $koffie->getBeschrijving());
    }

    public function testKoffieMetMelkKosten()
    {
        $koffie = new MelkDecorator(new BasisKoffie());
        $this->assertEquals(2.5, $koffie->getKosten());
    }

    public function testKoffieMetMelkBeschrijving()
    {
        $koffie = new MelkDecorator(new BasisKoffie());
        $this->assertEquals("Basis koffie, met melk", $koffie->getBeschrijving());
    }

    public function testKoffieMetMelkEnSuikerKosten()
    {
        $koffie = new SuikerDecorator(new MelkDecorator(new BasisKoffie()));
        $this->assertEquals(2.7, $koffie->getKosten());
    }

    public function testKoffieMetMelkEnSuikerBeschrijving()
    {
        $koffie = new SuikerDecorator(new MelkDecorator(new BasisKoffie()));
        $this->assertEquals("Basis koffie, met melk, met suiker", $koffie->getBeschrijving());
    }

    public function testKoffieMetSuikerEnMelkKosten()
    {
        $koffie = new MelkDecorator(new SuikerDecorator(new BasisKoffie()));
        $this->assertEquals(2.7, $koffie->getKosten());
    }

    public function testKoffieMetSuikerEnMelkBeschrijving()
    {
        $koffie = new MelkDecorator(new SuikerDecorator(new BasisKoffie()));
        $this->assertEquals("Basis koffie, met suiker, met melk", $koffie->getBeschrijving());
    }
}

<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\State\Deur;

class StateTest extends TestCase
{
    public function testInitialStateIsGesloten(): void
    {
        $deur = new Deur();
        $this->assertEquals('Gesloten', $deur->getCurrentState());
    }

    public function testOntgrendelenVanGeslotenNaarOpen(): void
    {
        $deur = new Deur();
        $deur->triggerEvent('ontgrendelen');
        $this->assertEquals('Open', $deur->getCurrentState());
    }

    public function testVergrendelenVanOpenNaarGesloten(): void
    {
        $deur = new Deur();
        $deur->triggerEvent('ontgrendelen'); // Eerst openen
        $deur->triggerEvent('vergrendelen');
        $this->assertEquals('Gesloten', $deur->getCurrentState());
    }

    public function testOngeldigeOvergangVergrendelenVanGeslotenBlijftGesloten(): void
    {
        $deur = new Deur();
        $deur->triggerEvent('vergrendelen');
        $this->assertEquals('Gesloten', $deur->getCurrentState());
    }

    public function testOngeldigeOvergangOntgrendelenVanOpenBlijftOpen(): void
    {
        $deur = new Deur();
        $deur->triggerEvent('ontgrendelen');
        $deur->triggerEvent('ontgrendelen');
        $this->assertEquals('Open', $deur->getCurrentState());
    }

    public function testGetCurrentState(): void
    {
        $deur = new Deur();
        $this->assertSame('Gesloten', $deur->getCurrentState());
        $deur->triggerEvent('ontgrendelen');
        $this->assertSame('Open', $deur->getCurrentState());
    }
}
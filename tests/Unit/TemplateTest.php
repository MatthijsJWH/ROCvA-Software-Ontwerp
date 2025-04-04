<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Template\ReceptBereider;
use App\Template\PastaReceptBereider;
use App\Template\TaartReceptBereider;

class TemplateTest extends TestCase
{
    public function testPastaReceptBereider() {
        $pastaRecept = new PastaReceptBereider(['pasta', 'tomatensaus', 'groenten']);
        $this->expectOutputRegex('/Ingrediënten verzameld/');
        $this->expectOutputRegex('/Pasta snijden/');
        $this->expectOutputRegex('/Pasta koken/');
        $this->expectOutputRegex('/Pasta met saus serveren/');
        $this->expectOutputRegex('/Keuken opgeruimd/');
        $pastaRecept->bereidRecept();
    }

    public function testTaartReceptBereider() {
        $taartRecept = new TaartReceptBereider(['bloem', 'eieren', 'suiker', 'fruit']);
        $this->expectOutputRegex('/Ingrediënten verzameld/');
        $this->expectOutputRegex('/Beslag maken/');
        $this->expectOutputRegex('/Taart bakken/');
        $this->expectOutputRegex('/Taart serveren/');
        $this->expectOutputRegex('/Keuken opgeruimd/');
        $taartRecept->bereidRecept();
    }
}

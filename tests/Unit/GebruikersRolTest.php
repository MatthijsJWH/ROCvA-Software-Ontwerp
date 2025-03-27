<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Enums\GebruikersRol;

class GebruikersRolTest extends TestCase {

    public function testGebruikersRolValues() {
        echo GebruikersRol::ADMIN->value;
        echo GebruikersRol::EDITOR->value;
        echo GebruikersRol::GEBRUIKER->value;
        $this->assertEquals('admin', GebruikersRol::ADMIN->value);
        $this->assertEquals('editor', GebruikersRol::EDITOR->value);
        $this->assertEquals('gebruiker', GebruikersRol::GEBRUIKER->value);
    }

    public function testKortingPerRol() {
        $this->assertEquals(0.30, GebruikersRol::ADMIN->getKorting());
        $this->assertEquals(0.20, GebruikersRol::EDITOR->getKorting());
        $this->assertEquals(0.10, GebruikersRol::GEBRUIKER->getKorting());
    }
}

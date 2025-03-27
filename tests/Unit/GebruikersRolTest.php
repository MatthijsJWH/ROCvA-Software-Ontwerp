<?php

use PHPUnit\Framework\TestCase;

require_once "GebruikersRol.php"; // Zorg dat je enum-bestand is ingeladen

class EnumTest extends TestCase {

    public function testGebruikersRolValues() {
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

<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\AuthService;

class AuthServiceTest extends TestCase {
    public function testSingletonInstance() {
        $db1 = AuthService::getInstance();
        $db2 = AuthService::getInstance();

        $this->assertSame($db1, $db2, "Er mag maar één instantie van Database bestaan.");
    }

    public function testLogin() {
        $auth = AuthService::getInstance();
        $this->assertTrue($auth->login("admin", "admin"), "Inloggen met juiste gegevens moet slagen");
        $this->assertFalse($auth->login("admin", "wrong"), "Inloggen met onjuiste gegevens moet falen");
        $this->assertFalse($auth->login("wrong", "admin"), "Inloggen met onjuiste gegevens moet falen");
    }
}

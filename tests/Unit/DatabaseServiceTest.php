<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\DatabaseService;

class DatabaseServiceTest extends TestCase {
    public function testSingletonInstance() {
        $db1 = DatabaseService::getInstance();
        $db2 = DatabaseService::getInstance();

        $this->assertSame($db1, $db2, "Er mag maar één instantie van Database bestaan.");
    }

    public function testDatabaseConnection() {
        $db = DatabaseService::getInstance();
        $this->assertEquals("a connection has been established", $db->getConnection(), "Database moet een geldige PDO-connectie teruggeven.");
    }
}

<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\LoggingService;

class LoggingServiceTest extends TestCase {
    public function testGetInstance() {
        $loggingService = LoggingService::getInstance();
        $this->assertInstanceOf(LoggingService::class, $loggingService, "Instance should be of LoggingService class.");
    }

    public function testIsActive() {
        $loggingService = LoggingService::getInstance();
        $this->assertTrue($loggingService->isActive(), "Logging service should be active.");
    }

    public function testLogMessage() {
        $loggingService = LoggingService::getInstance();
        $result = $loggingService->log("Test message");
        $this->assertTrue($result, "Log message should return true when logging is active.");
    }
}

<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class MailingServiceTest extends TestCase {
    public function testSendEmail() {
        $mailingService = new MailingService();
        $result = $mailingService->sendEmail('test@example.com', 'Test message');

        $this->assertTrue($result, "Email should be sent successfully.");
    }
}

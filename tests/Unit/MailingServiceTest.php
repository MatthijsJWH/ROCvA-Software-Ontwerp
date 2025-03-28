<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class MailingServiceTest extends TestCase {
    public function testSendEmail() {
        $mailingService = new MailingService();
        $result = $mailingService->sendMail(new User("admin", "admin"), 'Test message');

        $this->assertTrue($result, "Email should be sent successfully.");
    }
}

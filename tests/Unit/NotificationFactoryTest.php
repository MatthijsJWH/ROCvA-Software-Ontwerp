<?php

use PHPUnit\Framework\TestCase;

use App\Factories\NotificationFactory;
use App\Factories\MailNotificationFactory;
use App\Factories\SMSNotificationFactory;
use App\Factories\PushNotificationFactory;

use App\Models\EmailNotification;
use App\Models\SMSNotification;
use App\Models\PushNotification;


class NotificationFactoryTest extends TestCase {
    public function testFactoryCreatesCorrectFactory() {
        $emailFactory = new MailNotificationFactory();
        $smsFactory = new SMSNotificationFactory();
        $pushFactory = new PushNotificationFactory();

        $this->assertInstanceOf(NotificationFactory::class, $emailFactory);
        $this->assertInstanceOf(NotificationFactory::class, $smsFactory);
        $this->assertInstanceOf(NotificationFactory::class, $pushFactory);
    }

    public function testFactoryThrowsExceptionForUnknownType() {
        $this->expectException(InvalidArgumentException::class);
        NotificationFactory::createFactory("fax");
    }

    public function testSendMethod() {
        $email = MailNotificationFactory::createNotification("email", "Hello, world!");
        $this->assertEquals("Email verzonden!: Hello, world!", $email->send());

        $sms = SMSNotificationFactory::createNotification("sms", "Hello, world!");
        $this->assertEquals("SMS verzonden!: Hello, world!", $sms->send());

        $push = PushNotificationFactory::createNotification("push", "Hello, world!");
        $this->assertEquals("Push notificatie verzonden!: Hello, world!", $push->send());
    }
}

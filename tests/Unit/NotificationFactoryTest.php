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

    public function testSendMethod() {
        $emailFactory = new MailNotificationFactory();
        $smsFactory = new SMSNotificationFactory();
        $pushFactory = new PushNotificationFactory();

        $email = $emailFactory->createNotification("email", "Hello, world!");
        $this->assertTrue($email->send());

        $sms = $smsFactory->createNotification("sms", "Hello, world!");
        $this->assertTrue($sms->send());

        $push = $pushFactory->createNotification("push", "Hello, world!");
        $this->assertTrue($push->send());
    }
}

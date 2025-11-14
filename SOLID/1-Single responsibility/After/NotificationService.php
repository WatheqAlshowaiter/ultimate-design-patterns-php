<?php

namespace SingleResponsibility\After;

use SingleResponsibility\Shared\Customer;

class NotificationService
{
    public function sendEmailNotification(Customer $customer, string $message): void
    {
        echo "Sending email notification to: {$customer->getEmail()} with message: $message\n";
    }
}
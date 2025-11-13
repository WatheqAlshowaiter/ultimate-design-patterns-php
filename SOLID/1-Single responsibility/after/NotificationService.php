<?php

namespace after;

use Solid\HelperClasses\Customer;
use Solid\HelperClasses\Payment;
use Solid\HelperClasses\Order;

class NotificationService
{
    public function sendEmailNotification(Customer $customer, string $message) {
        echo "Sending email notification to: {$customer->getEmail()} with message: $message\n";
    }
}
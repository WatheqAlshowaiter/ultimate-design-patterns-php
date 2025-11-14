<?php

namespace SingleResponsibility\Before;

use Exception;
use SingleResponsibility\Shared\Customer;
use SingleResponsibility\Shared\Order;
use SingleResponsibility\Shared\Payment;

class OrderManager
{
    public function processOrder(Order $order): void
    {
        echo "Processing order: {$order->getName()} now...\n";
    }

    /**
     * @throws Exception
     */
    public function processPayment(Order $order, Payment $payment): void
    {
        echo "Processing payment of order {$order->getName()}\n";
        echo "Issuing payment for amount {$order->getPrice()}\n";

        switch ($payment->getType()) {
            case 'VISA':
                echo "Processing visa card payments...\n";
                break;
            case 'Master_Card':
                echo "Processing master card payments...\n";
                break;
            case 'American_Express':
                echo "Processing american express card payments...\n";
                break;
            default:
                throw new Exception("Unsupported payment type: {$payment->getType()}\n");
        }
    }

    public function sendEmailNotification(Customer $customer, string $message): void
    {
        echo "Sending email notification to: {$customer->getEmail()} with message: $message\n";
    }
}
<?php

namespace OpenClosed\After;

class PaymentProcessor
{
    public function __construct(
        public PaymentStrategy $paymentStrategy
    ) {
    }

    public function processPayment(Order $order): void
    {
        echo "Processing payment of order {$order->getName()}\n";
        echo "Issuing payment for amount {$order->getPrice()}\n";

        $this->paymentStrategy->processPayment($order->getPrice());
    }
}
<?php

namespace OpenClosed\After;


use OpenClosed\After\Strategies\VisaPaymentStrategy;
use OpenClosed\Shared\Order;

class ConsumerController
{
    public function pay(): void
    {
        $paymentProcessor = new PaymentProcessor(new VisaPaymentStrategy());
        $paymentProcessor->processPayment(new Order());
    }
}
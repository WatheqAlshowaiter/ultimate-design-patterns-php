<?php

namespace OpenClosed\After;

class ConsumerController
{
    public function pay(): void
    {
        $paymentProcessor = new PaymentProcessor(new VisaPaymentStrategy());
        $paymentProcessor->processPayment(new Order);
    }
}
<?php

namespace OpenClosed\After;

use Override;

class AmericanExpressPaymentStrategy implements PaymentStrategy
{
    #[Override]
    public function processPayment(float $amount): void
    {
        echo "Processing american express card payments...\n";
    }
}
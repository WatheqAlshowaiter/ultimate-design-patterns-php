<?php

namespace OpenClosed\After\Strategies;

use OpenClosed\After\Contracts\PaymentStrategy;
use Override;

class AmericanExpressPaymentStrategy implements PaymentStrategy
{
    #[Override]
    public function processPayment(float $amount): void
    {
        echo "Processing american express card payments...\n";
    }
}
<?php

namespace DependencyInversion\After\Strategies;

use OpenClosed\After\Contracts\PaymentStrategy;
use Override;

class VisaPaymentStrategy implements PaymentStrategy
{
    #[Override]
    public function processPayment(float $amount): void
    {
        echo "Processing visa card payments...\n";
    }
}
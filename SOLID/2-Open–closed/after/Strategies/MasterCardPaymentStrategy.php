<?php

namespace OpenClosed\After\Strategies;

use OpenClosed\After\Contracts\PaymentStrategy;
use Override;

class MasterCardPaymentStrategy implements PaymentStrategy
{
    #[Override]
     public function processPayment(float $amount): void
     {
        echo "Processing master card payments...\n";
    }
}
<?php

namespace OpenClosed\After\Strategies;

use OpenClosed\After\Contracts\PaymentStrategy;
use Override;

class PaypalPaymentStrategy implements PaymentStrategy
{
    #[Override]
     public function processPayment(float $amount): void
     {
        echo "Processing paypal card payments...\n";
    }
}
<?php

namespace OpenClosed\After;

use Override;

class PaypalPaymentStrategy implements PaymentStrategy
{
    #[Override]
     public function processPayment(float $amount): void
     {
        echo "Processing paypal card payments...\n";
    }
}
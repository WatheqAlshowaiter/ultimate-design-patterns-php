<?php

namespace OpenClosed\After;

use Override;

class MasterCartPaymentStrategy implements PaymentStrategy
{
    #[Override]
     public function processPayment(float $amount): void
     {
        echo "Processing master card payments...\n";
    }
}
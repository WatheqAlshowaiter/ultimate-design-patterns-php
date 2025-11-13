<?php

namespace OpenClosed\After;

interface PaymentStrategy
{
    public function processPayment(float $amount): void;
}
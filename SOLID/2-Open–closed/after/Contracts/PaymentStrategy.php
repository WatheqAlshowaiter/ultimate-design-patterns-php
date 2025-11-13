<?php

namespace OpenClosed\After\Contracts;

interface PaymentStrategy
{
    public function processPayment(float $amount): void;
}
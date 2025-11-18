<?php

namespace DependencyInversion\After\Contracts;

interface PaymentStrategy
{
    public function processPayment(float $amount): void;
}
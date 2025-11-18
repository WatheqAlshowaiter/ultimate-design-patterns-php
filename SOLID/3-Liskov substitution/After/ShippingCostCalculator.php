<?php

namespace LiskovSubstitution\After;

interface ShippingCostCalculator
{
    public function calculateShippingCost(): float;
}
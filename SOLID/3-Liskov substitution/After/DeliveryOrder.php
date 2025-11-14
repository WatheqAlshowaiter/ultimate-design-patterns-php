<?php

namespace LiskovSubstitution\After;

use LiskovSubstitution\Before\Order;

class DeliveryOrder extends Order implements ShippingCostCalculator
{
    public function calculateShippingCost(): float
    {
        return $this->price + parent::SHIPPING_COST;
    }
}
<?php

namespace LiskovSubstitution\Before;

class Order
{
    protected const float SHIPPING_COST = 10.0;
    protected string $name;
    protected float $price;

    public function getName(): string
    {
        return $this->name;
    }

    public function getTotalPrice(): float
    {
        return $this->price + self::SHIPPING_COST;
    }
}
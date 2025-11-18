<?php

namespace LiskovSubstitution\After;

class Order
{
    private const float SHIPPING_COST = 10.0;
    protected string $name;
    protected float $price;

    public function getName(): string
    {
        return $this->name;
    }
}
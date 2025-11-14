<?php

namespace SingleResponsibility\Shared;

class Order
{
    public function getName(): string
    {
        return 'Order 123';
    }

    public function getPrice(): float
    {
        return 100.00;
    }
}
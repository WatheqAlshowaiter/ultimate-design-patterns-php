<?php

namespace SingleResponsibility\After;


use SingleResponsibility\Shared\Order;

class OrderManagement
{
    public function processOrder(Order $order): void
    {
        echo "Processing order: {$order->getName()} now...\n";
    }
}
<?php

namespace after;

use Solid\HelperClasses\Customer;
use Solid\HelperClasses\Payment;
use Solid\HelperClasses\Order;

class OrderManagement
{
    public function processOrder(Order $order)
    {
        echo "Processing order: {$order->getName()} now...\n";
    }
}
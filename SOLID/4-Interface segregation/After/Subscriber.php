<?php

namespace InterfaceSegregation\After;

use InterfaceSegregation\Before\UserManagement;

class Subscriber implements NotificationService
{
    private string $email;

    public function __construct(private string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function subscribeToNewProductAvailability(): void
    {
        echo "Subscribing {$this->name} to new product availability notifications";
    }

    public function subscribeToSmsNotification(): void
    {
        echo "Subscribing {$this->name} to sms notifications";
    }
}
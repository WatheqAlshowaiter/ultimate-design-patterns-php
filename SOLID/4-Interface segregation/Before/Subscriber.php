<?php

namespace InterfaceSegregation\Before;

class Subscriber implements UserManagement
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

    public function updateUserProfile($user): void
    {

    }

    public function changePassword($user, string $password): void
    {

    }
}
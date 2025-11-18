<?php

namespace InterfaceSegregation\Before;

interface UserManagement
{

    public function subscribeToNewProductAvailability(): void;

    public function subscribeToSmsNotification(): void;

    public function updateUserProfile($user): void;

    public function changePassword($user, string $password): void;
}
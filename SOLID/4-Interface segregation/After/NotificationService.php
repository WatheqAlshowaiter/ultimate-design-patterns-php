<?php

namespace InterfaceSegregation\After;

interface NotificationService
{

    public function subscribeToNewProductAvailability(): void;

    public function subscribeToSmsNotification(): void;
}
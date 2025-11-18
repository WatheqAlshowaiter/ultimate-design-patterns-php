<?php

namespace DependencyInversion\Shared;

class Payment
{
    public function getType(): string
    {
        return 'Visa';
    }
}
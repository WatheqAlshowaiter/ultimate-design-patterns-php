<?php

namespace SingleResponsibility\Shared;

class Payment
{
    public function getType(): string
    {
        return 'Visa';
    }
}
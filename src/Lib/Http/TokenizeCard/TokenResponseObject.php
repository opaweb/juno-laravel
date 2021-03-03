<?php

use Jetimob\Juno\Lib\Traits\Serializable;

class TokenResponseObject
{
    use Serializable;

    public string $creditCardId;

    public string $last4CardNumber;

    public string $expirationMonth;

    public string $expirationYear;
    
}
<?php

namespace Jetimob\Juno\Lib\Model;

use Jetimob\Juno\Lib\Traits\Serializable;

class CreditCardDetails
{
    use Serializable;

    public string $creditCardId;

    public string $creditCardHash;

}

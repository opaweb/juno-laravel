<?php

namespace Jetimob\Juno\Lib\Http\Payment;

use Jetimob\Juno\Lib\Http\Request;
use Jetimob\Juno\Lib\Http\Method;
use Jetimob\Juno\Lib\Model\Billing;
use Jetimob\Juno\Lib\Model\CreditCardDetails;

class PaymentCreationRequest extends Request
{
    protected string $chargeId;

    protected Billing $billing;

    protected CreditCardDetails $creditCardDetails;

    protected array $bodySchema = ['chargeId', 'billing', 'creditCardDetails'];

    /**
     * ChargeCreationRequest constructor.
     * @param Charge $charge
     * @param Billing $billing
     */
    public function __construct($chargeId, Billing $billing, CreditCardDetails $creditCardDetails)
    {
        parent::__construct();
        $this->chargeId = $chargeId;
        $this->billing = $billing;
        $this->creditCardDetails = $creditCardDetails;
    }


    protected function method(): string
    {
        return Method::POST;
    }

    protected function urn(): string
    {
        return 'payments';
    }
}

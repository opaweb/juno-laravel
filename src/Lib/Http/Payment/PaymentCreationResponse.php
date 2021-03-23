<?php

namespace Jetimob\Juno\Lib\Http\Payment;

use Jetimob\Juno\Lib\Http\Response;
use Jetimob\Juno\Lib\Model\PaymentResource;
use Jetimob\Juno\Lib\Model\Link;


class PaymentCreationResponse extends Response
{
    
    protected string $transactionId;

    protected string $installments;

    protected array $payments;

    /** @var Link[] $_links */
    protected ?array $_links = null;

    public function initComplexObjects(): void
    {
        $this->payments = $this->deserializeEmbeddedArray('payments', PaymentResource::class);
    }

    /**
     * @return ChargeResource[]
     */
    public function getPayments(): array
    {
        return $this->payments;
    }

    /**
     * @return Link[]
     */
    public function getLinks(): array
    {
        return $this->_links;
    }
}

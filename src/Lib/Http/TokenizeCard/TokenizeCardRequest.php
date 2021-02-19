<?php

namespace \Jetimob\Juno\Lib\Http\TokenizeCard;

use Jetimob\Juno\Lib\Http\Request;
use Jetimob\Juno\Lib\Http\Method;
use Jetimob\Juno\Lib\Model\TokenizeCard;


/**
 * Class TokenizeCardRequest
 * @package Jetimob\Juno\Lib\Http\Charge
 * @see https://dev.juno.com.br/api/v2#operation/tokenizeCreditCard
 */
class ChargeCreationRequest extends Request
{
    protected TokenizeCard $tokenizeCard;


    protected array $bodySchema = ['tokenizeCard'];

    /**
     * TokenizeCardRequest constructor.
     * @param TokenizeCard $tokenizeCard
     */
    public function __construct(TokenizeCard $tokenizeCard)
    {
        parent::__construct();
        $this->tokenizeCard = $tokenizeCard;
    }

    protected function method(): string
    {
        return Method::POST;
    }

    protected function urn(): string
    {
        return 'credit-cards/tokenization';
    }
}

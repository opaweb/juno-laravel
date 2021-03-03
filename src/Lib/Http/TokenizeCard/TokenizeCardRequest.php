<?php

namespace Jetimob\Juno\Lib\Http\TokenizeCard;

use Jetimob\Juno\Lib\Http\Request;
use Jetimob\Juno\Lib\Http\Method;
use Jetimob\Juno\Lib\Http\BodyType;


/**
 * Class TokenizeCardRequest
 * @package Jetimob\Juno\Lib\Http\TokenizeCard
 * @see https://dev.juno.com.br/api/v2#operation/tokenizeCreditCard
 */
class TokenizeCardRequest extends Request
{
    protected TokenizeCard $tokenizeCard;

    protected string $bodyType = BodyType::JSON;

    protected array $bodySchema = ['creditCardHash'];

    protected string $responseClass = TokenizeCardResponse::class;

    //public string $cardHash;

    
    public function __construct(/*TokenizeCard $tokenizeCard*/)
    {
        parent::__construct();
        //$this->tokenizeCard = $tokenizeCard;
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

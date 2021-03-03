<?php

namespace Jetimob\Juno\Lib\Http\TokenizeCard;

use Jetimob\Juno\Lib\Http\Response;
//use Jetimob\Juno\Lib\Model\TokenizeCard;

/**
 * Class TokenizeCardResponse
 * @package Jetimob\Juno\Lib\Http\TokenizeCard
 * @see https://dev.juno.com.br/api/v2#operation/tokenizeCreditCard
 */
class TokenizeCardResponse extends Response
{
    public string $creditCardId;

    public string $last4CardNumber;

    public string $expirationMonth;

    public string $expirationYear;

    protected OddResponseObject $param;

    protected array $embeddedData;


    public function initComplexObjects(): void
    {
        $this->embeddedData = $this->deserializeEmbeddedArray(
            '', // key name inside _embedded
            TokenResponseObject::class, // deserialize each element to the given class
            [],                       // default value if the key is non existent
        );
    }

    /**
     * @return TokenizeCardResource[]
     */
    /*public function getCs(): array
    {
        return $this->charges;
    }*/

}

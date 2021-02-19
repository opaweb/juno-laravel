<?php

namespace Jetimob\Juno\Lib\Http\TokenizeCard;

use Jetimob\Juno\Lib\Http\Response;
use Jetimob\Juno\Lib\Model\TokenizeCard;

/**
 * Class TokenizeCardResponse
 * @package Jetimob\Juno\Lib\Http\TokenizeCard
 * @see https://dev.juno.com.br/api/v2#operation/tokenizeCreditCard
 */
class TokenizeCardResponse extends Response
{
    /** @var TokenizeCardResource[] $tokenizeCard */
    protected array $tokenizeCard;

    public function initComplexObjects(): void
    {
        $this->tokenizeCard = $this->deserializeEmbeddedArray('tokenizeCard', TokenizeCardResource::class);
    }

    /**
     * @return TokenizeCardResource[]
     */
    public function getCharges(): array
    {
        return $this->charges;
    }

}

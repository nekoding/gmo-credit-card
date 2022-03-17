<?php

namespace Nekoding\GmoCreditcard\Core\GmoAPI;

use Nekoding\GmoCreditcard\Contracts\GmoAPI\ShopApi\TDS1;
use Nekoding\GmoCreditcard\Contracts\Response;
use Nekoding\GmoCreditcard\Core\Response\ResponseAPI;

final class ShopApiWith3DS1 extends ShopApiBasic implements TDS1
{

    public function secureTransaction(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(TDS1::SECURE_TRANSACTION, $this->getData($formData)));
    }
    
}
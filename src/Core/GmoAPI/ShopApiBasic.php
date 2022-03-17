<?php

namespace Nekoding\GmoCreditcard\Core\GmoAPI;

use Nekoding\GmoCreditcard\Contracts\GmoAPI\ShopApi\Basic;
use Nekoding\GmoCreditcard\Contracts\Response;
use Nekoding\GmoCreditcard\Core\Response\ResponseAPI;
use Nekoding\GmoCreditcard\Traits\HttpClient;
use Nekoding\GmoCreditcard\Traits\ShopRequest;

class ShopApiBasic implements Basic
{

    use HttpClient, ShopRequest;

    public function entryTransaction(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(Basic::ENTRY_TRANSACTION, $this->getData($formData)));
    }

    public function execTransaction(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(Basic::EXEC_TRANSACTION, $this->getData($formData)));
    }

    public function alterTransaction(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(Basic::ALTER_TRANSACTION, $this->getData($formData)));
    }

    public function changeTransaction(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(Basic::CHANGE_TRANSACTION, $this->getData($formData)));
    }

    public function searchTradeTransaction(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(Basic::SEARCH_TRADE_TRANSACTION, $this->getData($formData)));
    }

}
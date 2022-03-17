<?php

namespace Nekoding\GmoCreditcard\Core\GmoAPI;

use Nekoding\GmoCreditcard\Contracts\GmoAPI\ShopApi\TDS2;
use Nekoding\GmoCreditcard\Contracts\Response;
use Nekoding\GmoCreditcard\Core\Response\ResponseAPI;
use Nekoding\GmoCreditcard\Traits\HttpClient;
use Nekoding\GmoCreditcard\Traits\ShopRequest;

final class ShopApiWith3DS2 extends ShopApiBasic implements TDS2
{

    use HttpClient, ShopRequest;

    public function tds2auth(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(TDS2::TDS2_AUTH, $this->getData($formData)));
    }

    public function tds2result(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(TDS2::TDS2_RESULT, $this->getData($formData)));
    }

    public function tds2auth_app(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(TDS2::TDS2_AUTH_APP, $this->getData($formData)));
    }

    public function tds2auth_app_result(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(TDS2::TDS2_AUTH_APP_RESULT, $this->getData($formData)));
    }

    public function secureTransaction(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(TDS2::SECURE_TRANSACTION, $this->getData($formData)));
    }
}
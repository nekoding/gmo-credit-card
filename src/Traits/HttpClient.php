<?php

namespace Nekoding\GmoCreditcard\Traits;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

trait HttpClient
{

    /**
     * @var \Illuminate\Http\Client\PendingRequest $httpClient
     */
    protected $httpClient;

    public function httpClient(): PendingRequest
    {
        if (!$this->httpClient) {
            $this->httpClient = Http::asJson()->acceptJson()->withHeaders($this->setupHeader())->baseUrl($this->getBaseUrl());
        }

        return $this->httpClient;
    }

    public function getBaseUrl(): string
    {
        return config('gmo-creditcard.gmo.mode') == 'production' ? config('gmo-creditcard.gmo.base_url.production') : config('gmo-creditcard.gmo.base_url.development');
    }

    public function setupHeader(): array
    {
        return [
            'Content-Type' => 'application/json',
            'charset'      => 'windows-31j'
        ];
    }

}
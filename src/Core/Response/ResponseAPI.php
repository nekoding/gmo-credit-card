<?php

namespace Nekoding\GmoCreditcard\Core\Response;

use Illuminate\Http\Client\Response as ClientResponse;
use Nekoding\GmoCreditcard\Contracts\Response as ResponseContract;
use Nekoding\GmoCreditcard\Exceptions\GMOErrorResponseException;

class ResponseAPI implements ResponseContract
{

    private $response;

    private $statusCode;

    public static function parseResponse(ClientResponse $response): ResponseContract
    {
        if (str_contains($response->body(), 'errCode')) {
            $results = collect(json_decode($response->body(), true));

            $errors = $results->map(function ($result) {
                return ErrorMessage::parseError($result['errInfo']);
            });

            throw new GMOErrorResponseException("request failed check your data", $errors->toArray());
        }

        return (new self)->setResponse(json_decode($response->body(), true))->setStatusCode($response->status());
    }

    public function setResponse(array $data): ResponseContract
    {
        $this->response = $data;

        return $this;
    }

    public function getResponse(): array
    {
        return $this->response;
    }

    public function setStatusCode(int $statusCode): ResponseContract
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
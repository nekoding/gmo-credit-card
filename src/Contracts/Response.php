<?php

namespace Nekoding\GmoCreditcard\Contracts;

use Illuminate\Http\Client\Response as ClientResponse;

interface Response
{

    public static function parseResponse(ClientResponse $response): self;

    public function setResponse(array $data): self;

    public function getResponse(): array;

    public function setStatusCode(int $statusCode): self;

    public function getStatusCode(): int;

}
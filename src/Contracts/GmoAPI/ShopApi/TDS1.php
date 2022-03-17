<?php

namespace Nekoding\GmoCreditcard\Contracts\GmoAPI\ShopApi;

use Nekoding\GmoCreditcard\Contracts\Response;

interface TDS1 extends Basic
{
    const SECURE_TRANSACTION = '/payment/SecureTran.idPass';

    public function secureTransaction(array $formData): Response;

}
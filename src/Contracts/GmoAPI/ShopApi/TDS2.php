<?php

namespace Nekoding\GmoCreditcard\Contracts\GmoAPI\ShopApi;

use Nekoding\GmoCreditcard\Contracts\Response;

interface TDS2 extends Basic
{

    const TDS2_AUTH = '/payment/Tds2Auth.idPass';

    const TDS2_RESULT = '/payment/Tds2Result.idPass';

    const TDS2_AUTH_APP = '/payment/Tds2AuthApp.idPass';

    const TDS2_AUTH_APP_RESULT = '/payment/Tds2ResultApp.idPass';

    const SECURE_TRANSACTION = '/payment/SecureTran2.idPass';

    public function tds2auth(array $formData): Response;

    public function tds2result(array $formData): Response;

    public function tds2auth_app(array $formData): Response;

    public function tds2auth_app_result(array $formData): Response;

    public function secureTransaction(array $formData): Response;

}
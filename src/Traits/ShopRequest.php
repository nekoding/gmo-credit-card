<?php

namespace Nekoding\GmoCreditcard\Traits;

trait ShopRequest
{
    /**
     * Append current form data with GMO Site Credentials
     *
     * @param  array $data
     * @return array
     */
    public function getData(array $data): array
    {
        return array_merge([
            'ShopID'    => config('gmo.creds.shop_id'),
            'ShopPass'  => config('gmo.creds.shop_pass'),
        ], $data);
    }
}
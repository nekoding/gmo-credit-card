<?php

namespace Nekoding\GmoCreditcard\Traits;

trait SiteRequest
{
    /**
     * Append current form data with GMO Site Credentials
     *
     * @param  array $data
     * @return array
     */
    public function getData(array $data): array
    {
        return [
            'SiteID'    => config('gmo.creds.site_id'),
            'SitePass'  => config('gmo.creds.site_pass'),
            ...$data
        ];
    }
}
<?php

namespace Nekoding\GmoCreditcard;

use Nekoding\GmoCreditcard\Contracts\GmoAPI\SiteApi as GmoSiteApi;
use Nekoding\GmoCreditcard\Core\GmoAPI\ShopApiBasic;
use Nekoding\GmoCreditcard\Core\GmoAPI\ShopApiWith3DS1;
use Nekoding\GmoCreditcard\Core\GmoAPI\ShopApiWith3DS2;
use Nekoding\GmoCreditcard\Core\GmoAPI\SiteApi;

class GmoCreditcard
{
    
    /**
     * useSiteApi
     *
     * @return GmoSiteApi
     */
    public function useSiteApi(): GmoSiteApi
    {
        return new SiteApi();
    }
    
    /**
     * useShopApi
     *
     * @return \Nekoding\GmoCreditcard\Contracts\GmoAPI\ShopApi\Basic
     * @return \Nekoding\GmoCreditcard\Contracts\GmoAPI\ShopApi\TDS1
     * @return \Nekoding\GmoCreditcard\Contracts\GmoAPI\ShopApi\TDS2
     * @throws \Nekoding\GmoCreditcard\Exceptions\GMOErrorResponseException
     */
    public function useShopApi()
    {
        if (config('gmo.security.use3ds') && config('gmo.security.version') == 1) {
            return new ShopApiWith3DS1();
        }

        if (!config('gmo.security.use3ds') && config('gmo.security.version') == 2) {
            return new ShopApiWith3DS2();
        }

        return new ShopApiBasic();
    }

}

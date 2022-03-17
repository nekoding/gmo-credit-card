<?php

namespace Nekoding\GmoCreditcard\Contracts\GmoAPI\ShopApi;

use Nekoding\GmoCreditcard\Contracts\Response;

interface Basic
{

    const ENTRY_TRANSACTION = '/payment/EntryTran.idPass';

    const EXEC_TRANSACTION = '/payment/ExecTran.idPass';

    const ALTER_TRANSACTION = '/payment/AlterTran.idPass';

    const CHANGE_TRANSACTION = '/payment/ChangeTran.idPass';

    const SEARCH_TRADE_TRANSACTION = '/payment/SearchTrade.idPass';

    public function entryTransaction(array $formData): Response;

    public function execTransaction(array $formData): Response;

    public function alterTransaction(array $formData): Response;

    public function changeTransaction(array $formData): Response;

    public function searchTradeTransaction(array $formData): Response;
    
}
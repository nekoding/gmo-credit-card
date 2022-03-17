<?php

namespace Nekoding\GmoCreditcard\Contracts\GmoAPI;

use Nekoding\GmoCreditcard\Contracts\Response;

interface SiteApi
{

    /**
     * @var string
     */
    const SAVEMEMBER_ENDPOINT       = '/payment/SaveMember.json';

    /**
     * @var string
     */
    const UPDATEMEMBER_ENDPOINT     = '/payment/UpdateMember.idPass';
    
    /**
     * @var string
     */
    const SEARCHMEMBER_ENDPOINT     = '/payment/SearchMember.idPass';

    /**
     * @var string
     */
    const DELETEMEMBER_ENDPOINT     = '/payment/DeleteMember.idPass';

    /**
     * @var string
     */
    const SAVECARD_ENDPOINT         = '/payment/SaveCard.idPass';

    /**
     * @var string
     */
    const TRADEDCARD_ENDPOINT       = '/payment/TradedCard.idPass';

    /**
     * @var string
     */
    const SEARCHCARD_ENDPOINT       = '/payment/SearchCard.idPass';

    /**
     * @var string 
     */
    const SEARCHCARDDETAIL_ENDPOINT = '/payment/ExecTran.idPass';

    /**
     * @var string
     */
    const DELETECARD_ENDPOINT       = '/payment/ExecTran.idPass';
    

    public function saveMember(array $formData): Response;

    public function updateMember(array $formData): Response;

    public function searchMember(array $formData): Response;

    public function deleteMember(array $formData): Response;

    public function saveCard(array $formData): Response;

    public function tradedCard(array $formData): Response;

    public function searchCard(array $formData): Response;

    public function searchCardDetail(array $formData): Response;

    public function deleteCard(array $formData): Response;

}
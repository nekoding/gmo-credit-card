<?php

namespace Nekoding\GmoCreditcard\Core\GmoAPI;

use Nekoding\GmoCreditcard\Contracts\GmoAPI\SiteApi as GmoAPIContracts;
use Nekoding\GmoCreditcard\Contracts\Response;
use Nekoding\GmoCreditcard\Core\Response\ResponseAPI;
use Nekoding\GmoCreditcard\Traits\HttpClient;
use Nekoding\GmoCreditcard\Traits\SiteRequest;

final class SiteApi implements GmoAPIContracts
{

    use HttpClient, SiteRequest;
    
    public function saveMember(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(GmoAPIContracts::SAVEMEMBER_ENDPOINT, $this->getData($formData)));
    }

    public function updateMember(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(GmoAPIContracts::UPDATEMEMBER_ENDPOINT, $this->getData($formData)));
    }

    public function searchMember(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(GmoAPIContracts::SEARCHMEMBER_ENDPOINT, $this->getData($formData)));
    }

    public function deleteMember(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(GmoAPIContracts::DELETEMEMBER_ENDPOINT, $this->getData($formData)));
    }

    public function saveCard(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(GmoAPIContracts::SAVECARD_ENDPOINT, $this->getData($formData)));
    }

    public function tradedCard(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(GmoAPIContracts::TRADEDCARD_ENDPOINT, $this->getData($formData)));
    }

    public function searchCard(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(GmoAPIContracts::SEARCHCARD_ENDPOINT, $this->getData($formData)));
    }
    
    public function searchCardDetail(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(GmoAPIContracts::SEARCHCARDDETAIL_ENDPOINT, $this->getData($formData)));
    }

    public function deleteCard(array $formData): Response
    {
        return ResponseAPI::parseResponse($this->httpClient()->post(GmoAPIContracts::DELETECARD_ENDPOINT, $this->getData($formData)));
    }
}
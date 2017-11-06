<?php

namespace bconnect\MailingWork\Apis;

use bconnect\MailingWork\Client;
use bconnect\MailingWork\BaseApiClient;

class RecipientClient extends BaseApiClient {

  public function getRecipientById($id) {
    return $this->client->request('getrecipientbyid', ['recipientId' => $id]);
  }

}

<?php

namespace bconnect\MailingWork\Apis;

use bconnect\MailingWork\Client;
use bconnect\MailingWork\BaseApiClient;

class RecipientClient extends BaseApiClient {

  public function getRecipientById($id) {
    return $this->client->request('getRecipientById', ['recipientId' => $id]);
  }

  public function getRecipientListsById($id) {
    return $this->client->request('GetRecipientListsById', ['recipientId' => $id]);
  }

}

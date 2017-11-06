<?php

namespace bconnect\MailingWork\Apis;

use bconnect\MailingWork\Client;
use bconnect\MailingWork\BaseApiClient;

class ListClient extends BaseApiClient {

  public function getLists() {
    return $this->client->request('getlists');
  }

}

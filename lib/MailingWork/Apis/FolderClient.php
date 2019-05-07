<?php

/**
 * Folder Api Class.
 */

namespace bconnect\MailingWork\Apis;

use bconnect\MailingWork\Client;
use bconnect\MailingWork\BaseApiClient;

/**
 * This class implements all folder management functions.
 */
class FolderClient extends BaseApiClient {

  public function getFolders() {
    return $this->client->request('getFolders');
  }

}
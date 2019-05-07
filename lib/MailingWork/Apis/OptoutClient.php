<?php

/**
 * Optout Api Class.
 */

namespace bconnect\MailingWork\Apis;

use bconnect\MailingWork\BaseApiClient;

/**
 * This class implements all Opt-Out management functions.
 */
class OptoutClient extends BaseApiClient {

  public function getOptouts(array $advanced = []) {
    return $this->client->request('getOptouts', [
      'advanced' => $advanced,
    ]);
  }

}
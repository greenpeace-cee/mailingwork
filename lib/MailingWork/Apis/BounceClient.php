<?php

/**
 * Bounce Api Class.
 */

namespace bconnect\MailingWork\Apis;

use bconnect\MailingWork\BaseApiClient;

/**
 * This class implements all bounce management functions.
 */
class BounceClient extends BaseApiClient {

  public function getBounces(array $advanced = []) {
    return $this->client->request('getBounces', [
      'advanced' => $advanced,
    ]);
  }

  public static function getErrorCodes() {
    return [
      'getBounces' => [
        2 => 'invalid field to filter',
        3 => 'invalid emailId',
      ],
    ];
  }

}
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

  public function getBouncesByEmailId($emailId, array $advanced = []) {
    return $this->client->request('getBouncesByEmailId', [
      'emailId' => $emailId,
      'advanced' => $advanced,
    ]);
  }

  public function getRetainedEmailAddresses(array $advanced = []) {
    return $this->client->request('getRetainedEmailAddresses', [
      'advanced' => $advanced,
    ]);
  }

  public static function getErrorCodes() {
    return [
      'getBounces' => [
        2 => 'invalid field to filter',
        3 => 'invalid emailId',
      ],
      'getBouncesByEmailId' => [
        2 => 'invalid field to filter',
        3 => 'invalid emailId',
      ],
      'getRetainedEmailAddresses' => [
        2 => 'invalid lastHardBounceFrom',
        3 => 'invalid lastHardBounceTo',
        4 => 'lastHardBounceFrom bigger than lastHardBounceTo',
      ],
    ];
  }

}

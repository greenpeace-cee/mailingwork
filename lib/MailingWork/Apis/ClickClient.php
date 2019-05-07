<?php

/**
 * Click Api Class.
 */

namespace bconnect\MailingWork\Apis;

use bconnect\MailingWork\BaseApiClient;

/**
 * This class implements all click tracking functions.
 */
class ClickClient extends BaseApiClient {

  public function getClicksByEmailId($emailId, array $advanced = []) {
    return $this->client->request('getClicksByEmailId', [
      'emailId' => $emailId,
      'advanced' => $advanced,
    ]);
  }

  public static function getErrorCodes() {
    return [
      'getClicksByEmailId' => [
        2 => 'missing e-mail-id',
        3 => 'e-mail not found',
      ],
    ];
  }

}
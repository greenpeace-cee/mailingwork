<?php

/**
 * Opening Api Class.
 */

namespace bconnect\MailingWork\Apis;

use bconnect\MailingWork\BaseApiClient;

/**
 * This class implements all opening tracking functions.
 */
class OpeningClient extends BaseApiClient {

  public function getOpeningsByEmailId($emailId, array $advanced = []) {
    return $this->client->request('getOpeningsByEmailId', [
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
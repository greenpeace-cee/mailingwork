<?php

/**
 * Link Api Class.
 */

namespace bconnect\MailingWork\Apis;

use bconnect\MailingWork\BaseApiClient;

/**
 * This class implements all link-related functions.
 */
class LinkClient extends BaseApiClient {

  public function getLinksByEmailId($emailId) {
    return $this->client->request('getLinksByEmailId', [
      'emailId' => $emailId,
    ]);
  }

  public static function getErrorCodes() {
    return [
      'getLinksByEmailId' => [
        2 => 'missing e-mail-id',
        3 => 'e-mail not found',
        4 => 'e-mail not sent',
      ],
    ];
  }

}

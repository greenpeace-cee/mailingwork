<?php

/**
 * Mailing Api Class.
 */

namespace bconnect\MailingWork\Apis;

use bconnect\MailingWork\Client;
use bconnect\MailingWork\BaseApiClient;

/**
 * This class implements all list management functions.
 */
class MailingClient extends BaseApiClient {

  /**
   * Get all mailings.
   *
   * @param null $status
   * @param null $type
   * @param null $startDate
   * @param null $endDate
   *
   * @return Mailing[]
   * @throws \bconnect\MailingWork\ApiException
   */
  public function getMailings($status = NULL, $type = NULL, $startDate = NULL, $endDate = NULL) {
    return $this->client->request('getMailings', [
      'advanced' => [
        'status' => $status,
        'type' => $type,
        'startDate' => $startDate,
        'endDate' => $endDate,
      ]
    ]);
  }

  public function getEmailById($id) {
    return $this->client->request('getEmailById', [
      'emailId' => $id,
    ]);
  }

  public static function getErrorCodes() {
    return [

    ];
  }

}

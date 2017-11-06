<?php

namespace bconnect\MailingWork;

class BaseApiClient {

  public static function getClient(Client $client) {
    return new static($client);
  }

  private function __construct(Client $client) {
    $this->client = $client;
  }

}
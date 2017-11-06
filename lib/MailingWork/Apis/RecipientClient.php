<?php

namespace bconnect\MailingWork\Apis;

use bconnect\MailingWork\Client;
use bconnect\MailingWork\BaseApiClient;

class RecipientClient extends BaseApiClient {

  public function getRecipientById($id) {
    return $this->client->request('getRecipientById', ['recipientId' => $id]);
  }

  public function getRecipientListsById($id) {
    return $this->client->request('GetRecipientListsById', ['recipientId' => $id]);
  }

  public function createRecipient($listId, $fields) {
    return $this->client->request('GetRecipientListsById', [
      'listId' => $listId,
      'fields' => ($fields) ? json_encode($fields) : ''
    ]);
  }

  public function deleteRecipientById($id) {
    return $this->client->request('DeleteRecipientById', [
      'recipientId' => $id
    ]);
  }

  public function getInterestsByRecipientId($id, $start = FALSE) {
    return $this->client->request('getInterestsByRecipientId', [
      'recipientId' => $id,
      'advanced' => [
        'start' => ($start) ? $start : ''
      ]
    ]);
  }

  public function getRecipientByFieldIdAndValue($fieldId, $value, $listId = FALSE) {
    return $this->client->request('getRecipientByFieldIdAndValue', [
      'fieldId' => $id,
      'value' => $value,
      'advanced' => [
        'listId' => ($listId) ? $listId : ''
      ]
    ]);
  }

  //GetRecipientFieldsById
  public function getRecipientFieldsById($id) {
    return $this->client->request('getRecipientFieldsById', [
      'recipientId' => $id
    ]);
  }

  //GetRecipientFieldsByIdAndCode
  public function getRecipientFieldsByIdAndCode($id, $code) {
    return $this->client->request('getRecipientFieldsByIdAndCode', [
      'recipientId' => $id,
      'code' => $code
    ]);
  }

  //GetRecipientIdByEmail
  public function getRecipientIdByEmail($email) {
    return $this->client->request('getRecipientIdByEmail', [
      'email' => $email
    ]);
  }

  //GetRecipientIdByFieldIdAndValue
  public function getRecipientIdByFieldIdAndValue($fieldId, $value) {
    return $this->client->request('getRecipientIdByFieldIdAndValue', [
      'fieldId' => $fieldId,
      'value' => $value
    ]);
  }

  //GetRecipientIdByOptin
  public function getRecipientIdByOptin($optinId, $value) {
    return $this->client->request('getRecipientIdByOptin', [
      'optinId' => $optinId,
    ]);
  }

  //GetRecipientIdsByEmail
  public function getRecipientIdsByEmail($email, $listId = FALSE) {
    return $this->client->request('getRecipientIdsByEmail', [
      'email' => $email,
      'advanced' => [
        'listId' => ($listId) ? $listId : ''
      ]
    ]);
  }

  public function getRecipientIdsByFieldIdAndValue($fieldId, $value) {
    return $this->client->request('getRecipientIdsByFieldIdAndValue', [
      'fieldId' => $fieldId,
      'value' => $value
    ]);
  }

}

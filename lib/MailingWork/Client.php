<?php

namespace bconnect\MailingWork;

use bconnect\MailingWork\Config\Config;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Client as HttpClient;

class Client {

  private $client;
  private $config;
  private $apis;

  private function __construct(HttpClient $client,Config $config) {
    $this->client = $client;
    $this->config = $config;
  }

  public function request($url, $params = []) {
    $response = $this->client->post($url,[
      'form_params' => $params
    ]);
    $json = json_decode($response->getBody());
    return $json;
  }

  protected function getImplementingClasses($name ) {
    $className = '\\bconnect\\MailingWork\\Apis\\' . ucfirst($name) . 'Client';
    if (class_exists($className)) {
      return $className::getClient($this);
    }
  }

  public function api($name) {
    if (!isset($this->apis[$name])) {
      $class = $this->getImplementingClasses($name);
      if (!$class) {
        return FALSE;
      }
      $this->apis[$name] = $class;
    }
    return $this->apis[$name];
  }


  public static function getClient($username, $password) {
    $config = new Config();
    $config->setAuthentication($username, $password);
    $stack = HandlerStack::create();
    foreach ($config->middleware() as $name => $middleware) {
      $stack->push($middleware, $name);
    }
    $client = new HttpClient([
      'base_uri' => $config->getBaseUrl(),
      'http_errors' => $config->useHttpErrors(),
      'headers' => [
          'Accept' => 'application/json',
          'Content-Type' => 'application/x-www-form-urlencoded',
      ],
      'handler' => $stack,
    ]);
    return new static($client, $config);
  }

}
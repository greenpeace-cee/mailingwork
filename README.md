# mailingwork

## Clients

* [ListClient](/doc/ListClient.md)
* [RecipientClient](/doc/RecipientClient.md)
* [SelectionClient](/doc/SelectionClient.md)
* [TargetGroupClient](/doc/TargetGroupClient.md)


## Installation

This project is not published on packagist till now.
```
composer require bconnect/mailingwork
```

## Usage
```
$client = Client::getClient('user', 'pass');
$listId = $client->api('list')->createList("Api created list");

$recipient = $client->api('recipient')->getRecipientById(5);
```
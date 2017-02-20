<?php
include_once('vendor/autoload.php');

$token = 'c311244565ef2c76e08982a4bb76215d8cd0f260';

$client = new \KBatch\FGZRestClient\RestClient\RestClient('localhost:8000', $token);
$request = new \KBatch\FGZRestClient\Request\ChangeCardEditionsRequest();
$request->setIsGold(true);
$request->setEdition('2016');

try {
    $resp = $client->sendRequest('api/cards/555/editions', $request);
    var_dump($resp);
} catch (Exception $e) {
    echo $e->getMessage();
}

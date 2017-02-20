<?php
include_once('vendor/autoload.php');
$token = 'c311244565ef2c76e08982a4bb76215d8cd0f260';
$client = new \Celtic\FGZRestClient\RestClient\RestClient('localhost:8000', $token);
$request = new \Celtic\FGZRestClient\Request\ChangeCardEditionsRequest();
$request->setIsGold(true);
$request->setEdition('2014');

try {
    $resp = $client->sendRequest('api/cards/3/editions', $request);
    var_dump($resp);
} catch (\GuzzleHttp\Exception\RequestException $e) {
    echo 'There was a problem while processing request.';
} catch (Exception $e) {
    echo $e->getMessage();
}

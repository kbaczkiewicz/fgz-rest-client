<?php
include_once('vendor/autoload.php');
$token = 'c311244565ef2c76e08982a4bb76215d8cd0f260';
$client = new \celtic\FGZRestClient\RestClient\RestClient('localhost:8000', $token);
$request = new \celtic\FGZRestClient\Request\ChangeCardVisibilityRequest();

$request->setVisibility('1');

try {
    $resp = $client->sendRequest('api/cards/3/visibilities', $request);
    var_dump($resp);
} catch (\GuzzleHttp\Exception\RequestException $e) {
    echo 'There was a problem while processing request.';
} catch (Exception $e) {
    echo $e->getMessage();
}

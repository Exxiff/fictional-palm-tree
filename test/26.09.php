<?php
//izdrukat visas epizodes no api, nosaukumus
//https://rickandmortyapi.com/api/episode

$url = 'https://rickandmortyapi.com/api/episode';
$jsonData = file_get_contents($url);
$responseData = json_decode($jsonData);
foreach ($responseData->results as $entry) {
    echo $entry->episode . " " . $entry->name . PHP_EOL;
}
<?php

header('Content-Type: application/json');

$apiKey = 'fakekey';

$url = "https://api.nasa.gov/planetary/apod?api_key={$apiKey}";

$response = file_get_contents($url);

if ($response === false) {
    http_response_code(500);
    exit;
}

echo $response;

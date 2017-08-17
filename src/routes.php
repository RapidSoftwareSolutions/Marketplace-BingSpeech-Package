<?php
$routes = [
    'metadata',
    'getAccessToken',
    'speechRecognition',
    'textToSpeach'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}


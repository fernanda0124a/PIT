<?php

require_once __DIR__ . '/vendor/autoload.php';
$client = new MongoDB\Client('mongodb+srv://Fernanda24:kljdfvg354erf6s5wr@cluster0.5kcwhzr.mongodb.net/?retryWrites=true&w=majority');
$database = $client->Pit_mymeds;
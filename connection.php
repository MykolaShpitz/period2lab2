<?php
require_once __DIR__ ."/vendor/autoload.php";

$client = new MongoDB\Client;

$coll = $client->jorgino->filmoteka_new;
?>
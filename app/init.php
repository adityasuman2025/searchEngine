<?php
   use Elasticsearch\ClientBuilder;

    require 'vendor/autoload.php';

    $client = ClientBuilder::create()->build();
    
	$results = $client->search([]);
	print_r($results);
?>
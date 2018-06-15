<?php
	$client = new Client(); // Instance Guzzle
	$shopify_api_key = ''; // Api key 
	$shopify_api_secret= '';
	$shopify_store = 'mystore.shopify.com'
    $string_json = array ( "product"  => array ( "title" => 'new product' , 'description' => 'my description' , 'tags' => 'programmer11'));
    $string_json = json_encode($string_json);
    $data = $client->post('https://'.$shopify_api_key.':'.$shopify_api_secret.'@'.$shopify_store.'/admin/products.json', null, $string_json);
    $data->setHeader("Content-Type", "application/json");
    $response = $data->send();
    $response->getBody(true);
?>
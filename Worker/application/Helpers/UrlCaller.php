<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use GuzzleHttp\Client as GuzzleClient;

if ( ! function_exists('urlHelper'))
{
    function urlHelper(string $verb, string $url, string $content = "")
    {
		$client = new GuzzleClient;
		
		if ($verb == "POST")
			$client->request("POST", $url, $content);
		
		if ($verb == "GET")
			$client->request("GET", $url);
		
		if ($verb == "PUT")
			$client->request("PUT", $url, $content);
		
		if ($verb == "DELETE")
			$client->request("DELETE", $url);
    }   
}
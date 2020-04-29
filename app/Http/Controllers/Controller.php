<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
		function handleGet($service, Request $request)
		{
			//return $request;
			// if ?wsdl, return the doc
			return "handle get for $service";
		}

		function handlePost($service, Request $request)
		{

			$options = array(
			            'uri' => "http://$_SERVER[SERVER_ADDR]/wsdl/$service",
			            'location' => "http://$_SERVER[SERVER_ADDR]/wsdl/$service", // what´s the diff?
			        );

	    //$server = new \Laminas\Soap\Server('./docs/test.wsdl', $options); // if the first argument is passed, then the server is on WSDL mode
			$server = new \Laminas\Soap\Server(null, $options);

	    // check if class exists..
	    if (!class_exists("App\Http\Wsdl\\$service")) {
					// should return a soap fault..
	        die("class App\Http\Wsdl\\$service does not exist.");
	    }

			// somewhere it should validate the xml.. using the server in WSDL mode, and comparing the input with the wsdl doc.

	    // Bind class to Soap Server:
	    $server->setClass("App\Http\Wsdl\\$service");

			$server->handle();

	}
}

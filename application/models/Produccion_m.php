<?php
class Produccion_m extends CI_Model {

    public function get_produccion()
	{
		// Initiate the cURL object (open connection)
		$curl = curl_init();

		curl_setopt($curl, CURLOPT_URL, "http://vwebdelta/wsAutEmp/Service1.asmx/ProduccionActual");    // URL to fetch
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);												// TRUE to return the transfer as a string of the return value

		// Submit the POST request and decode the returned JSON string as an array of objects
		$output = curl_exec($curl);
		$output = json_decode($output);

		// Close cURL session handle (close connection)
		curl_close($curl);

		return is_null($output) ? json_decode("{}") : $output;
	}
}
?>
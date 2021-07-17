<?php
	/**
	 *	Get JSON data from data.json file and convert it to array
	 *
	 *	@return array
	 */
	function getData ()
	{
		$filePath = 'json/data.json';

		if (!is_file($filePath) && !file_exists($filePath)) {
			$filePath = '../json/data.json';
		}

		$jsonString = file_get_contents($filePath);
		$data = json_decode($jsonString, true);
		$data = (object) $data;

		return $data;
	}

	/**
	 *	Return the application url.
	 *	
	 *	@param string, $route
	 *	@return string
	 */
	function url ($route = null) 
	{
		$url = 'http://'.$_SERVER['HTTP_HOST'].$route;
		
		return $url;
	}
?>
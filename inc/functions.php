<?php
//GetLocation
//Get the current location with the API
function GetLocation($zip, $number)
{
	// Set account + address parameters
	$auth_key = "wov3qXqEJZjV6sqX";
	$nl_sixpp = $zip;

	// Optional
	$streetnumber = (int)($number);

	// Optionally, set a timeout (in ms)
	$timeout = 5000;

	$url = "http://api.pro6pp.nl/v1/autocomplete?auth_key=" . $auth_key .
		   "&nl_sixpp=" . urlencode($nl_sixpp) .
		   "&streetnumber=" . $streetnumber;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_TIMEOUT_MS, $timeout);

	$result = curl_exec($ch);
	curl_close($ch);
	
	if($result)
	{
		$output = json_decode($result);
		$status = $output->{"status"};

		if ($status === "ok")
		{
			
			//Set a session for view and post
			$location['street'] = $output->{"results"}[0]->{"street"};
			$location['number'] = $streetnumber;
			$location['zip'] = $zip;
			$location['city'] = $output->{"results"}[0]->{"city"};
			
			$location['lat'] = $output->{"results"}[0]->{"lat"} . '0';
			$location['lon'] = $output->{"results"}[0]->{"lng"} . '0';
			
			return $location;
		}
		else
		{
			//Error.
			$message = $output->{"error"}->{"message"};
			return $message;
		}
	} 
}
?>
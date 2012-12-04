<?php
include('../inc/functions.php');

//Please do not change anything at this page, unless you're sure what you're doing!
//Be carefull

// This is for the second address
if($_POST['zip2'] && $_POST['number2'])
{
	$_POST['zip'] = $_POST['zip2'];
	$_POST['number'] = $_POST['number2'];
}

if($_POST['zip'] && $_POST['number'])
{
	$location = GetLocation($_POST['zip'], $_POST['number']);

	if(is_array($location))
	{
		$str = $location['street'] . ' ' . $location['number'] . '<br />
				' . $location['zip'] . ' ' . $location['city'];
	}
	else
	{
		$str = $location;
	}
	
	// Vertalingen
	if($str == 'Streetnumber not found')
	{
		$str = 'Huisnummer niet gevonden';
	}
	
	if($str == 'Invalid nl_sixpp format')
	{
		$str = 'Postcode niet gevonden';
	}
	
	if($str == 'nl_sixpp not found')
	{
		$str = 'Postcode niet bekend';
	}
			
	echo $str;
	unset($str);
}
?>
<?php
//Root of website (empty if not in development)
$website = 'digisupplies';

if(
	$_SERVER['HTTP_HOST'] == '37.0.85.201' || 
	$_SERVER['HTTP_HOST'] == 'localhost' || 
	$_SERVER['HTTP_HOST'] == 'idsgnserver'
)
{
	$development = true;
}

//Development envoironment
if($development)
{

	$baseurl = 'http://' . $_SERVER['HTTP_HOST'] . '/' . strtolower($website) . '/';
	
	//Database connection
	$connect['server'] = '';
	$connect['database'] = '';
	$connect['user'] = '';
	$connect['pass'] = '';
	
	//@mysql_connect($connect['server'], $connect['user'], $connect['pass'])or die("Sorry, we could not connect to the database...");
	//@mysql_select_db($connect['database'])or die("The requested database doesn't exists...");
	
	//Error reporting
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
}

//Live envoironment
else
{
	$baseurl = 'http://' . $_SERVER['HTTP_HOST'] . '/';
	
	//Database connection
	$connect['server'] = '';
	$connect['database'] = '';
	$connect['user'] = '';
	$connect['pass'] = '';
	
	//@mysql_connect($connect['server'], $connect['user'], $connect['pass'])or die("Sorry, we could not connect to the database...");
	//@mysql_select_db($connect['database'])or die("The requested database doesn't exists...");
	
	//Error reporting
	error_reporting(0);
}

session_start();
?>

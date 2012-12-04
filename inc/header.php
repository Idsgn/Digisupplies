<?php
include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
	<head>
		<title>Digisupplies.nl</title>

		<!-- META tags -->
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		
		<!-- Meta attributes -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
		<meta name="author" content="Idsgn" />
		
		<!-- General stylesheets -->
		<!-- HTML5Shiv, for browsers that can't use HTML5 -->
		<!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
        <![endif]-->
		
		<link rel="stylesheet" href="<?=$baseurl?>css/reset.css" />
		<link rel="stylesheet" href="<?=$baseurl?>css/default.css" />
		<link rel="stylesheet" href="<?=$baseurl?>css/print.css" media="print" />
			
		<!-- IE specific stylesheets -->
		<!--[if gte IE 8]>
			<link rel="stylesheet" href="<?=$baseurl?>css/ie.css" />
		<![endif]-->
		
		<!-- favicon -->
		<link type="image/x-icon" rel="shortcut icon" href="<?=$baseurl?>favicon.ico" />

		<!-- Javascript -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.1/mootools.js"></script>
		<script type="text/javascript" src="<?=$baseurl?>js/selectivizr.js"></script>
		<script type="text/javascript" src="<?=$baseurl?>js/selectivizr-min.js"></script>
		<script type="text/javascript" src="<?=$baseurl?>js/DS.js"></script>
		
		<!-- 
		Important for the postcode API
		-->
		<script type="text/javascript">
		var baseurl = '<?=$baseurl?>';
		</script>
		
	</head>
	
	<div class="top">
		<div id="top">
			<a href="<?=$baseurl?>inloggen.php" title="Inloggen">Inloggen</a>
			<a href="<?=$baseurl?>account_aanmaken.php" title="Account aanmaken">Account aanmaken</a>
			<a href="<?=$baseurl?>mijn_account.php" title="Mijn account">Mijn account</a>
			<a href="<?=$baseurl?>winkelwagen.php" title="Uw winkelwagen"><img src="<?=$baseurl?>img/layout/cart.png" class="cart" alt="Winkelwagentje" />1 item</a>
			<span class="cart_total">&euro; 165,- Excl. verzendkosten</span>
			<a href="<?=$baseurl?>winkelwagen.php" title="Bestellen">Bestellen</a>
		</div>
	</div>
	
	<div id="uberdiv"> <!-- Fix for mobile devices (because of the slider buttons) -->
	
	<div class="container">
		<header class="main">
			<a href="<?=$baseurl?>" title="Onedayprice.nl">
				<img src="<?=$baseurl?>img/layout/logo.png" alt="Logo Onedayprice.nl" />
			</a>
			
			<nav id="main">
				<a href="#" title="horlogenl.nl">horlogenl.nl</a>
				<a href="#" title="Sealdedeal.nl">sealdedeal.nl</a>
				<a href="#" title="Fashionnl.nl">fashionnl.nl</a>
				<a href="#" title="Alle 9 shops">alle 9 shops <span class="more"></span></a>
			</nav>
			
			<div class="clear"></div>
			
			<div id="strengths">
				<ul>
					<li>1 winkelwagen</li>
					<li>verzendkosten NL &euro; 3,95</li>
					<li>verzendkosten EU &euro; 6,95</li>
					<li>alles op voorraad</li>
					<li>snel geleverd</li>
					<li>lid van thuiswinkel.org</li>
				</ul>
				<div class="clear"></div>
			</div>
			
			<div class="clear"></div>
		</header>
	</div>
	
	<div class="container">
	<div id="content">
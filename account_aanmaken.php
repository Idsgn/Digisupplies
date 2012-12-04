<?php
//Header
include("inc/header.php");
?>

<?php
if($_POST)
{
	//To get the address values, use the function from inc/functions.php
	//$location = getLocation($_POST['zip'], $_POST['number']);
	//U can use:
	// - $location['street']
	// - $location['number']
	// - $location['zip']
	// - $location['city']
}
?>

<!-- Account aanmaken -->

<h1>Account aanmaken</h1>
<p>
	Met een Digisupplies -account profiteer je van vele voordelen. Zoals het inzien van je bestelstatus, een overzicht van je retouren en 
	het beheren van je persoonlijke gegevens. Bovendien is het account geldig op alle Digisupplies -shops.
</p>

<form method="post" action="#" id="register">
	<label for="company">Bedrijfsnaam</label>
	<input type="text" name="company" id="company" />
	<br />	
	
	<label for="salutation">Aanhef</label>
	<select name="salutation" id="salutation">
		<option value="1">Dhr.</option>
		<option value="2">Mevr.</option>
	</select>
	<span class="required">*</span>
	<br />
	
	<label for="first_name">Voornaam</label>
	<input type="text" name="first_name" id="first_name" />
	<span class="required">*</span>
	<br />
	
	<label for="last_name">Achternaam</label>
	<input type="text" name="first_name" id="first_name" />
	<span class="required">*</span>
	<br />
	
	<label for="email">E-mailadres</label>
	<input type="text" name="email" id="email" />
	<span class="required">*</span>
	<br />
	
	<label for="phone">Telefoonnummer</label>
	<input type="text" name="phone" id="phone" />
	<span class="required">*</span>
	<br />
		
	<label for="countryCheck">Land</label>
		<select name="country" id="countryCheck">
		<?php
		include('_general/countries.php');
		?>
		</select>
	<span class="required">*</span>
	<br style="float: left;" />
		
	<div id="streetContainer" style="clear: left;">
		<label for="street">Straat</label>
		<input type="text" name="street" id="street" />
		<span class="required">*</span>
		<br />
	</div>
	
	<label for="zip">Postcode</label>
	<input type="text" name="zip" id="zip" />
	<input type="text" name="number" id="number" />
	<span class="required">*</span>
	<br />
	
	<div id="locationPlaceholder">
	<!-- 
	Loaded by AJAX
	-->
	</div>
	
	<label for="country">Land</label>
	<select name="country" id="country">
		<option value="">Kies een land</label>
		<!--
		While loop for all countries		
		-->
	</select>
	<span class="required">*</span>
	<br />
	
	<div class="clear"></div>

	<input type="submit" value="Registreren" />

	<div class="clear"></div>
	
	<p>
		Onderdelen aangegeven met een * zijn verplicht!
	</p>
</form>

<div class="clear"></div>

<?php
//Partners
include("_general/partners.php");
?>

<div class="clear"></div>

<?php
//Footer
include("inc/footer.php");
?>
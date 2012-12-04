<?php
//Header
include("inc/header.php");
?>

<!-- Mijn account -->

<div class="grid_small">
	<h2>Mijn adresgegevens</h2>
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
		
		<div id="streetContainer">
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
		<br />
		
		<div class="clear"></div>

		<input type="submit" value="Opslaan" />

		<div class="clear"></div>
	</form>
	
</div>

<div class="grid_large">
<h2>Mijn inloggegevens</h2>
	<form method="post" action="#">
		<label for="email">E-mailadres</label>
		<input type="text" name="email" id="email" />
		<br />
		
		<label for="password">Wachtwoord</label>
		<input type="password" name="password" id="password" />
		<br />
		
		<label for="confirmation">Wachtwoord herhalen</label>
		<input type="password" name="confirmation" id="confirmation" />
		<br />
		
		<div class="clear"></div>
		
		<input type="submit" value="Opslaan" />
	</form>
</div>


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
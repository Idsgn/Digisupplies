<?php
//Header
include("inc/header.php");
?>

<!-- Algemene voorwaarden -->

<h1>Contact</h1>
<p>Op onze website proberen we u zoveel mogelijk informatie over onze producten en service in het algemeen te geven. Mocht u desondanks toch vragen hebben? Neem dan contact met ons. Wij staan u graag bij in uw zoektocht naar een gepast antwoord.</p>
<p>Heeft u een klacht? Dan kunt u dit kenbaar maken via ons contactformulier. Wij zullen uw klacht binnen 3 dagen verwerken.</p>

<h2>Contactformulier</h2>
<form method="post" action="#">
	<label for="name">Uw naam</label>
	<input type="text" name="name" id="name" />
	<br />
	
	<label for="email">E-mailadres</label>
	<input type="text" name="email" id="email" />
	<br />
	
	<label for="phone">Telefoonnummer</label>
	<input type="text" name="phone" id="phone" />
	<br />
	
	<label for="subject">Onderwerp</label>
	<select name="subject" id="subject">
		<option value="Algemene vraag">Algemene vraag</option>
		<option value="Product">Product</option>
		<option value="Bestelling">Bestelling</option>
		<option value="Website functionaliteit">Website functionaliteit</option>
	</select>
	<br />
		
	<label for="message">Opmerkingen</label>
	<textarea name="message" id="message"></textarea>
	<br />
	
	<input type="submit" value="Verzenden" />
</form>

<div class="clear"></div>

<?php
//Footer
include("inc/footer.php");
?>
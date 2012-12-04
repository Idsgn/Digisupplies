<?php
//Header
include("inc/header.php");
?>

<!-- Afrekenen -->

<div class="navigation_cart">
	<a href="<?=$baseurl?>winkelwagen.php" class="cart_navigation_first" title="Uw winkelwagen">Winkelwagen</a>
	<a href="<?=$baseurl?>afrekenen.php" class="cart_navigation_active" title="Uw bestelling afrekenen">Afrekenen</a>
	<a href="<?=$baseurl?>bevestiging.php" class="cart_navigation" title="Bevestiging">Bevestiging</a>
</div>

<div class="clear"></div>

<div class="checkout">
	<h1>Stap 2: Afrekenen</h1>
	<p>Vul uw gegevens in en kies voor de gewenste betalingsmethode.</p>
	<p>Heeft u al een account? Dan kunt u <a href="<?=$baseurl?>inloggen.php" title="Inloggen">hier inloggen</a>.</p>
	<hr />
	
	<form method="post" action="bevestiging.php" id="register">

	<div class="grid_small">
		<!-- Personal information or login -->
		<h2>Naam en adres</h2>
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
		
		<a href="#" class="other_address" id="otherAddressA" title="Een ander bezorgadres opgeven">Een ander bezorgadres opgeven</a>
		
		<div class="clear"></div>
		
		<!-- Hidden by default -->
		<div id="otherAddress">
			<h2>Naam en adres</h2>
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
			
			<label for="countryCheck2">Land</label>
				<select name="country2" id="countryCheck2">
				<?php
				include('_general/countries.php');
				?>
				</select>
			<span class="required">*</span>
			<br />
			
			<div id="streetContainer2">
				<label for="street2">Straat</label>
				<input type="text" name="street2" id="street2" />
				<span class="required">*</span>
				<br />
			</div>
			
			<label for="zip2">Postcode</label>
			<input type="text" name="zip2" id="zip2" />
			<input type="text" name="number2" id="number2" />
			<span class="required">*</span>
			<br />
			
			<div id="locationPlaceholder2">
			<!-- 
			Loaded by AJAX
			-->
			</div>
		</div>
		
		<div class="clear"></div>
		
		<!-- Select a shipment -->
		<h2>Verzending</h2>
		<input type="radio" name="shipment" value="pickup" id="pickup"/>
		<label for="pickup" class="special"><strong>Afhalen (alleen op afspraak) &euro; 0,00</strong></label>
		<br />
		
		<input type="radio" name="shipment" value="GLS" id="GLS"/>
		<label for="GLS" class="special"><strong>Verzenden met GLS</strong></label>
		<br />
	</div>
	
	<div class="grid_large">
	
		<!-- Check your order -->
		<h2>Controleer uw bestelling</h2>
		<table class="checkout">
			<tr>
				<th>Artikel</th>
				<th>Aantal</th>
				<th>Subtotaal</th>
			</tr>
			<tr>
				<td>ABS behuizing 115x65x40 mm</td>
				<td>3</td>
				<td>&euro; 999.95</td>
			</tr>
			<tr>
				<td colspan="2" class="total_top">Subtotaal</td>
				<td class="top">&euro; 999.95</td>
			</tr>
			<tr>
				<td colspan="2" class="total">BTW</td>
				<td>&euro; 209,98</td>
			</tr>
			<tr class="total">
				<td colspan="2" class="total">Totaal</td>
				<td class="total_amount">&euro; 1209,94</td>
			</tr>
		</table>
		
		<label for="comments">Opmerkingen</label>
		<textarea name="comments" id="comments"></textarea>
		
		<div class="clear"></div>
		
		<!-- Select a payment method -->
		<h2>Betaalmethode</h2>
		<input type="radio" name="payment" value="ideal" id="ideal" />
		<label for="ideal" class="special">iDEAL</label>
		<br />
		
		<input type="radio" name="payment" value="prepay" id="prepay" />
		<label for="prepay" class="special">Vooruitbetaling</label>
		<br />
		
		<input type="radio" name="payment" value="rembours" id="rembours" />
		<label for="rembours" class="special">Rembours (extra kosten &euro; 29,95)</label>
		<br />
		
		<div class="clear"></div>
		
		<input type="checkbox" name="newsletter" id="newsletter"/>
		<label for="newsletter" class="special">Abonneer op onze nieuwsbrief</label>
		
		<div class="clear"></div>
		
		<input type="checkbox" name="terms" id="terms" />
		<label for="terms" class="special">Ik accepteer de <a href="<?=$baseurl?>" title="Algemene voorwaarden">Algemene voorwaarden</a></label>
		<br />
	</div>
		
	<div class="clear"></div>
		
	<a href="<?=$baseurl?>" class="continue_shopping" title="Verder winkelen">Verder winkelen</a>
	<input type="submit" class="cart" value="Afrekenen" />
	
	</form>
</div>

<div class="clear"></div>

<?php
//Footer
include("inc/footer.php");
?>
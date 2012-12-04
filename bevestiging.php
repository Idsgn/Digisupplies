<?php
//Header
include("inc/header.php");
?>

<!-- Bevestiging -->

<div class="navigation_cart">
	<a href="<?=$baseurl?>winkelwagen.php" class="cart_navigation_first" title="Uw winkelwagen">Winkelwagen</a>
	<a href="<?=$baseurl?>afrekenen.php" class="cart_navigation_active" title="Uw bestelling afrekenen">Afrekenen</a>
	<a href="<?=$baseurl?>bevestiging.php" class="cart_navigation_active" title="Bevestiging">Bevestiging</a>
</div>

<div class="clear"></div>

<div class="confirmation">

	<h1>Stap 3: Bevestiging</h1>
	<p>Wij hebben je bestelling succesvol ontvangen. We zullen je order uitleveren op de datum dat stond aangegeven als levertijd.</p>
	<p>Heb je gekozen voor een bankoverschrijving vergeet dan niet uw factuurnummer te vermelden.</p>
	
	<h2>Onze bankgegevens</h2>
	<p>
		<table class="bevestigen">
			<tr>
				<td>Bedrijfsnaam</td>
				<td>Digisupplies.nl</td>
			</tr>
			<tr>
				<td>Banknummer ING</td>
				<td>27.57.162</td>
			</tr>
			<tr>
				<td>IBAN</td>
				<td>NL10INGB0002757162</td>
			</tr>
			<tr>
				<td>BIC</td>
				<td>INGBNL2A</td>
			</tr>
		</table>
		Graag tot ziens! 
	</p>

</div>

<div class="clear"></div>

<?php
//Footer
include("inc/footer.php");
?>


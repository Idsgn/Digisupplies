<?php
//Header
include("inc/header.php");
?>

<!-- Winkelwagen -->

<div class="navigation_cart">
	<a href="<?=$baseurl?>winkelwagen.php" class="cart_navigation_first" title="Uw winkelwagen">Winkelwagen</a>
	<a href="<?=$baseurl?>afrekenen.php" class="cart_navigation" title="Uw bestelling afrekenen">Afrekenen</a>
	<a href="<?=$baseurl?>bevestiging.php" class="cart_navigation" title="Bevestiging">Bevestiging</a>
</div>

<div class="clear"></div>

<div class="cart">
	<h1>Stap 1: Je winkelwagen</h1>
	
	<form method="post" action="afrekenen.php">
		<table class="cart">
			<tr>
				<th>Artikel</th>
				<th>Omschrijving</th>
				<th>Levertijd</th>
				<th>Aantal</th>
				<th>Van</th>
				<th>Prijs</th>
				<th>Verwijder</th>
			</tr>
			
			<?php
			$i = 1;
			while($i <= 3) {
			?>
			
			<tr>
				<td>
					<img src="<?=$baseurl?>img/products/product_04.png" class="thumbnail" alt="" />
				</td>
				<td>ABS behuizing 115x65x40 mm</td>
				<td>1 - 5 werkdagen</td>
				<td>
					<select name="amount" class="amount">
					<?php
					$x = 1;
					while($x <= 10)
					{
						echo '<option value="' . $x . '">' . $x . '</option>';
						$x++;
					}
					?>
					</select>
				</td>
				<td>&euro; 1999,95</td>
				<td>&euro; 999,95</td>
				<td>
					<a href="#" title="Verwijderen"><img src="<?=$baseurl?>img/layout/cross.png" alt="Kruisje" /></a>
				</td>
			</tr>
			
			<?php
			$i++;
			}
			?>
			
			<tr>
				<td colspan="3"></td>
				<td colspan="2" class="total_top">Totaal <span class="sendcost">(excl. verzendkosten)</span></td>
				<td class="total_top">&euro; 2999,85</td>
				<td class="total_top"></td>
			</tr>
			<tr>
				<td colspan="3"></td>
				<td colspan="2" class="discount">Je totale korting</td>
				<td class="total">&euro; 250,00</td>
				<td class="total"></td>
			</tr>
		</table>
		
		<a href="<?=$baseurl?>" title="Verder winkelen" class="continue_shopping">verder winkelen</a>
		<input type="submit" class="cart" value="bestelling afronden" />
	</form>
	
</div>

<div class="clear"></div>

<?php
//Additional offers 
include("_general/extra_aanbiedingen.php");
?>

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
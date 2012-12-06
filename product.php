<?php
//Header
include("inc/header.php");
?>

<!-- jQuery module -->
<script type="text/javascript">
$(document).ready(function()
{
	$("#product_04").mlens(
	{
		imgSrc: $("#product_04").attr("data-big"),	// path of the hi-res version of the image
		lensShape: "circle",				// shape of the lens (circle or square)
		lensSize: 180,					// size of the lens (in px)
		borderSize: 4,					// size of the lens border (in px)
		borderColor: "#fff",				// color of the lens border (#hex)
		borderRadius: 0					// border radius (optional, only if the shape is square)
	});
});
</script>


<!-- Product -->
<div class="product">
	<div class="images">
		<div class="large">
			<img src="<?=$baseurl?>img/products/product_04.png" id="product_04" data-big="<?=$baseurl?>img/products/product_04.png" alt="Sport armband geschikt voor de iPhone 3g / 3gs/ 4g/ iPod" />
		</div>
		<div class="small">
			<img width="160" height="117" border="0" alt="" src="http://www.ihelicopter.nl//userfiles/images/producten/ei/160x160/13807-gfgfg545.jpg" />
			<img width="160" height="117" border="0" alt="" src="http://www.ihelicopter.nl//userfiles/images/producten/ei/160x160/13807-gfgfg545.jpg" />
			<img width="160" height="117" border="0" alt="" src="http://www.ihelicopter.nl//userfiles/images/producten/ei/160x160/13807-gfgfg545.jpg" />
			<img width="160" height="117" border="0" alt="" src="http://www.ihelicopter.nl//userfiles/images/producten/ei/160x160/13807-gfgfg545.jpg" />
			
			<div class="clear"></div>
		</div>
	</div>

	<div class="information">
		<h1>Sport armband geschikt voor de iPhone 3g / 3gs/ 4g/ iPod</h1>
		<p>
			Deze sportarmband is geschikt voor de iPHone, iPod nano, iPod video, iPod classic, iPod Touch en is ideaal voor tijdens het sporten. 
			Zo kunt u uw favoriete muziek beluisteren en bellen tijdens het sporten.
			Sluit perfect aan en is van hoogwaardig materiaal.
		</p>
		
		<!-- MB 04-05-2012
		<span class="normal_price">normale prijs &euro; 12,95</span>
		-->
		<span class="only_today">alleen vandaag:</span>
		<span class="price_now">&euro;6,95</span>
		
		<a href="winkelwagen.php" title="Klik en bestel" class="order">Klik en bestel</a>
		<div class="clear"></div>
	</div>
	
	<div class="clear"></div>
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
include("inc/footer.php");
?>
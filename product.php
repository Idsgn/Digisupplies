<?php
//Header
include("inc/header.php");
?>

<!-- Mlens jQuery module -->
<script type="text/javascript">
$(document).ready(function()
{
	$("#18867-dssad-small").mlens(
	{
		imgSrc: $("#18867-dssad-small").attr("data-big"),
		lensShape: "circle",
		lensSize: 180,
		borderSize: 4,
		borderColor: "#fff",
		borderRadius: 0
	});
});
</script>

<!-- Product -->
<div class="product">
	<div class="images">
	
		<div class="image_layout">
			<div class="product_img">
				<img src="<?=$baseurl?>img/products/18867-dssad-small.jpg" id="18867-dssad-small" data-big="<?=$baseurl?>img/products/18867-dssad-large.jpg" class="" alt="Sport armband geschikt voor de iPhone 3g / 3gs/ 4/ iPod" />
			</div>
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
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

<!-- Homepage -->
<div class="dayproduct">
	<div class="deal">
		<div class="image_layout">
			<div class="dayproduct_img">
				<img src="<?=$baseurl?>img/products/18867-dssad-small.jpg" id="18867-dssad-small" data-big="<?=$baseurl?>img/products/18867-dssad-large.jpg" class="" alt="Sport armband geschikt voor de iPhone 3g / 3gs/ 4/ iPod" />
			</div>
		</div>
		
		<div class="duration">
			<span class="durability">deze deal is nog geldig voor:</span>
			<br />
			<span class="hours">129</span>
			<span class="separate">:</span>
			<span class="minutes">06</span>
			<span class="separate">:</span>
			<span class="seconds">37</span>
		</div>
	</div>
	
	<div class="information">
		<h1>Sport armband geschikt voor de iPhone 3g / 3gs/ 4g/ iPod</h1>
		<p>
			Deze sportarmband is geschikt voor de iPHone, iPod nano, iPod video, iPod classic, iPod Touch en is ideaal voor tijdens het sporten. 
			Zo kunt u uw favoriete muziek beluisteren en bellen tijdens het sporten.
			Sluit perfect aan en is van hoogwaardig...
		</p>
		
		<span class="only_today">alleen vandaag:</span>
		<span class="price_now">&euro;6,95</span>
		
		<a href="product.php" title="Klik en bestel" class="order">Klik en bestel</a>
		<a href="product.php" title="Meer informatie over Sport armband geschikt voor de iPhone 3g / 3gs/ 4/ iPod" class="more">meer info</a>
	
	<div class="clear"></div>
	</div>
	
	<div class="clear"></div>
</div>

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
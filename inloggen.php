<?php
//Header
include("inc/header.php");
?>

<!-- Inloggen -->

<div id="content">
<h1>Inloggen</h1>
<p>
	Om in te kunnen loggen bij <?=$website . '.nl'?> heeft u een account nodig.
	<br />
	Indien u nog geen account heeft kunt u een <a href="<?=$baseurl?>account_aanmaken.php" title="Account aanmaken">account aanmaken</a>.
</p>

<form method="post" action="#">
	<label for="email">E-mailadres</label>
	<input type="text" name="email" id="email" />
	<br />
	
	<label for="password">Password</label>
	<input type="password" name="password" id="password" />
	<br />
	
	<div class="clear"></div>
	
	<p>
		<a href="<?=$baseurl?>wachtwoord_vergeten.php" class="password" title="Uw wachtwoord vergeten?">Uw wachtwoord vergeten?</a>
	</p>

	<input type="submit" value="Inloggen" />
</form>

<div class="clear"></div>
</div>

<div class="clear"></div>

<?php
//Partners
include("_general/partners.php");
?>

<?php
//Footer
include("inc/footer.php");
?>
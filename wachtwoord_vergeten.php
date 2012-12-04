<?php
//Header
include("inc/header.php");
?>

<!-- Wachtwoord vergeten -->

<h1>Wachtwoord vergeten</h1>
<p>Als u uw wachtwoord bent vergeten kunnen wij u een nieuw wachtwoord toezenden.</p>

<form method="post" action="#">
	<label for="email">Uw e-mailadres</label>
	<input type="text" name="email" id="email" />
	<br />
	
	<input type="submit" value="Wachtwoord herstellen" />
</form>

<div class="clear"></div>

<?php
//Footer
include("inc/footer.php");
?>
<?php include_once '../konfiguracija.php';  ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<?php include_once '../predlosci/head.php'; ?>
</head>
<body>
	<?php include_once '../predlosci/izbornik.php'; ?>
	<div class="row">
		<div class="large-6 large-centered columns">
	<?php 
						if(isset($_GET["neuspio"])){
							echo "Neispravna kombinacija korisnika i lozinke!";
						}
						
						if(isset($_GET["nemateOvlasti"])){
							echo "Morate se prvo logirati!";
						}
						
						 ?>
						
						<form method="post" action="<?php echo $putanjaAPP;  ?>autorizacija.php">
							<label for="ime">Ime</label>
							<input type="text" name="ime" id="ime" 
							value="<?php echo isset($_GET["ime"]) ? $_GET["ime"] : ""; ?>"/>
							<label for="lozinka">Lozinka</label>
							<input type="password" name="lozinka" id="lozinka" />
							<input type="submit" class="button expanded" value="Autoriziraj" />
						</form>
			</div>
		</div>
	<?php	include_once '../predlosci/foot.php'; ?>
	<?php	include_once '../predlosci/skripte.php'; ?>
</body>
</html>
<?php include_once '../../konfiguracija.php';
$uvjet = isset($_GET["uvjet"]) ? $_GET["uvjet"] : ""; ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../../predlosci/head.php'; ?>
  </head>
  <body>
  	<?php include_once '../../predlosci/izbornik.php'; ?>
  		<div class="large-12 columns">
				<div class="callout">
					<div class="row">
						<div class="large-12 columns">
							<form method="GET">
								<input type="text" placeholder="Ime ekipe" name="uvjet"
								value="<?php echo $uvjet; ?>">
							</form>
						</div>
					</div>
				</div>
		</div>
		<table class="hover unstriped">
						<thead>
							<tr>
								<th>Ime ekipe</th>
								<th>Kvizovi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$uvjetUpit = "%" . $uvjet . "%";
							$izraz = $veza->prepare("select c.naziv, a.datum from kviz a inner join ekipa_kviz b on a.kviz_id=b.kviz_id
													   inner join ekipa c on b.ekipa_id=c.ekipa_id order by a.datum asc");
							$izraz->execute();
							$red=$izraz->fetchAll();
							foreach($red as $a) {
							?>
							<tr>
								<td><?php echo $a['naziv']; ?></td>
								<td><?php echo $a['datum']; ?></td>
						</tbody>
						<?php } 	?>
					</table>
    <?php include_once '../../predlosci/skripte.php'; ?>
    <?php include_once '../../predlosci/foot.php'; ?>	
  </body>
</html>	
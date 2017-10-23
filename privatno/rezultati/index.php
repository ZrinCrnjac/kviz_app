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
							$izraz = $veza->prepare("select * from ekipa");
							$izraz->execute();
							$red=$izraz->fetchAll();
							$uvjetUpit = "%" . $uvjet . "%";
							$izraz = $veza->prepare("select * from ekipa where naziv like :uvjet");
							$izraz->execute(array("uvjet"=>$uvjetUpit));
							$red=$izraz->fetchAll();
							foreach($red as $a) {
							?>
							<tr>
								<td><?php echo $a['naziv']; ?></td>
								<td><?php 
								$izraz=$veza->prepare("select a.datum,c.ekipa_id from kviz a inner join ekipa_kviz b on a.kviz_id=b.kviz_id
														inner join ekipa c on b.ekipa_id=c.ekipa_id");
								$izraz->execute();
								$red=$izraz->fetchAll();
								if($red[1]["ekipa_id"]===$a["ekipa_id"]){
									echo $red[1]['datum'];
								}
								?></td>
						</tbody>
						<?php } 	?>
					</table>
    <?php include_once '../../predlosci/skripte.php'; ?>
    <?php include_once '../../predlosci/foot.php'; ?>	
  </body>
</html>	
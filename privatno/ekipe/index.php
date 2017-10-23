<?php include_once '../../konfiguracija.php'; ?>
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
						<div class="large-6 columns">
							<form method="GET">
								<input type="text" placeholder="Ime ekipe" name="uvjet">
							</form>
						</div>
                        <div class="large-6 columns">
                            <a href="dodaj.php">
                                <button type="submit" class="success button expanded">Dodaj</button>
                            </a>
                        </div>
					</div>
				</div>
		</div>
		<table class="hover unstriped">
						<thead>
							<tr>
								<th>Ime ekipe</th>
								<th>Broj članova</th>
                                <?php if(isset($_SESSION['logiran'])) : ?>
                                    <th>Uredi</th>
                                    <th>Obriši</th>
                                <?php endif; ?>
							</tr>
						</thead>
						<tbody>
							<?php
							$izraz = $veza->prepare("select ekipa_id, naziv, br_clanova from ekipa");
							$izraz->execute();
							$red=$izraz->fetchAll();
							foreach($red as $a) {
							?>

							<tr>
								<td><?php echo $a['naziv']; ?></td>
								<td><?php echo $a['br_clanova']; ?></td>
                                <?php if(isset($_SESSION['logiran'])) : ?>
                                    <td><a href="uredi.php?id=<?php echo $a['ekipa_id'] ?>">Uredi</a></td>
                                    <td><a href="obrisi.php?id=<?php echo $a['ekipa_id'] ?>">Obriši</a></td>
                                <?php endif; ?>
						</tbody>
            <?php } ?>
					</table>
    <?php include_once '../../predlosci/skripte.php'; ?>
    <?php include_once '../../predlosci/foot.php'; ?>	
  </body>
</html>	
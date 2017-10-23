<?php include_once '../../konfiguracija.php'; ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <?php include_once '../../predlosci/head.php'; ?>
</head>
<body>
<?php include_once '../../predlosci/izbornik.php'; ?>
<?php if(isset($_SESSION['logiran'])): ?>
<div class="large-12 columns">
    <div class="callout">
        <div class="row">
            <div class="large-12 columns">
                <a href="../../privatno/kvizovi/dodaj.php">
                    <button type="submit" class="success button expanded">Dodaj</button>
                </a>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<table class="hover unstriped">
    <thead>
    <tr>
        <th>Datum kviza</th>
        <?php if(isset($_SESSION['logiran'])): ?>
            <th>Detalji</th>
            <th>Promijeni</th>
            <th>Obriši</th>
        <?php endif; ?>
    </tr>
    </thead>
    <tbody>
    <?php
    $izraz = $veza->prepare("select * from kviz");
    $izraz->execute();
    $red=$izraz->fetchAll();
    foreach($red as $a) {
    ?>

    <tr>
        <td><?php echo $a['datum']; ?></td>
        <?php if(isset($_SESSION['logiran'])) : ?>
            <td><a href="../../privatno/kvizovi/detalji.php?id=<?php echo $a['kviz_id'] ?>">Detalji</a></td>
            <td><a href="../../privatno/kvizovi/uredi.php?id=<?php echo $a['kviz_id'] ?>">Promijeni</a></td>
            <td><a href="../../privatno/kvizovi/obrisi.php?id=<?php echo $a['kviz_id'] ?>">Obriši</a></td>
        <?php endif; ?>
    </tbody>
    <?php } ?>
</table>
<?php include_once '../../predlosci/skripte.php'; ?>
<?php include_once '../../predlosci/foot.php'; ?>
</body>
</html>
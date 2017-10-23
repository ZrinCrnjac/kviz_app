<?php
include_once('../../konfiguracija.php');
include_once('../../predlosci/izbornik.php');
include_once('../../predlosci/head.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $izraz = $veza->prepare("select ekipa_id, naziv, br_clanova from ekipa WHERE ekipa_id = :id");
    $izraz->execute(array('id' => $id));
    $red = $izraz->fetchAll();
}
?>
<form action="promjena.php" method="post">
    <input type="hidden" name="ekipa_id" value="<?php echo $red[0]['ekipa_id'] ?>">
    <label for="naziv">Ime ekipe</label>
    <input type="text" name="naziv" value="<?php echo $red[0]['naziv'] ?>">
    <label for="br_clanova">Broj članova</label>
    <input type="text" name="br_clanova" value="<?php echo $red[0]['br_clanova'] ?>">
    <button type="submit" class="success button expanded">Potvrdi</button>
    <a href="index.php">
        <button class="warning button expanded">
            Odustani
        </button>
    </a>
</form>
<?php
include_once('../../predlosci/skripte.php');
?>
<?php
include_once("../../konfiguracija.php");
include_once("../../predlosci/head.php");
include_once("../../predlosci/izbornik.php");
$id=$_GET["id"];
$izraz=$veza->prepare("select * from pitanje where kviz_id=:id");
$izraz->execute(array(
	"id"=>$id
));
$red=$izraz->fetchAll();
$izraz=$veza->prepare("select * from kviz where kviz_id=:id");
$izraz->execute(array(
	"id"=>$id
));
$kviz=$izraz->fetchAll();
?>
<form action="unesi.php" method="post">
    <label for="datum">Datum kviza</label>
    <input type="date" name="datum" value="<?php echo $kviz[0]["datum"]; ?>">
        <div class="large-6 columns">
            <h1>Sport</h1>
            <input type="hidden"  name="kategorija_id1" value="1">
            <label for="s_pitanje1">1.</label>
            <input type="text" name="s_pitanje1" value="<?php echo $red[0]["tekst_pitanja"]; ?>">
            <label for="s_pitanje2">2.</label>
            <input type="text" name="s_pitanje2" value="<?php echo $red[1]["tekst_pitanja"]; ?>">
        </div>
        <div class="large-6 columns">
            <h1>Kultura</h1>
            <input type="hidden"  name="kategorija_id2" value="2">
            <label for="k_pitanje1">1.</label>
            <input type="text" name="k_pitanje1" value="<?php echo $red[2]["tekst_pitanja"]; ?>">
            <label for="k_pitanje2">2.</label>
            <input type="text" name="k_pitanje2" value="<?php echo $red[3]["tekst_pitanja"]; ?>">
        </div>
        <div class="large-6 columns">
            <h1>Znanost</h1>
            <input type="hidden"  name="kategorija_id3" value="3">
            <label for="z_pitanje1">1.</label>
            <input type="text" name="z_pitanje1" value="<?php echo $red[4]["tekst_pitanja"]; ?>">
            <label for="z_pitanje2">2.</label>
            <input type="text" name="z_pitanje2" value="<?php echo $red[5]["tekst_pitanja"]; ?>">
        </div>
        <div class="large-6 columns">
            <h1>Povijest/Geografija</h1>
            <input type="hidden" name="kategorija_id4" value="4">
            <label for="pg_pitanje1">1.</label>
            <input type="text" name="pg_pitanje1" value="<?php echo $red[6]["tekst_pitanja"]; ?>">
            <label for="pg_pitanje2">2.</label>
            <input type="text" name="pg_pitanje2" value="<?php echo $red[7]["tekst_pitanja"]; ?>">
        </div>
        <div class="large-12 columns">
            <h1 class="text-center">Iznenađenje</h1>
            <input type="hidden" name="kategorija_id5" value="5">
            <label for="i_pitanje1">1.</label>
            <input type="text" name="i_pitanje1" value="<?php echo $red[8]["tekst_pitanja"]; ?>">
            <label for="i_pitanje2">2.</label>
            <input type="text" name="i_pitanje2" value="<?php echo $red[9]["tekst_pitanja"]; ?>">
        </div>
        <button type="submit" class="success button expanded">Potvrdi</button>
    </form>
    <a href="../../javno/kvizovi/index.php">
        <button class="warning button expanded">
            Odustani
        </button>
    </a>
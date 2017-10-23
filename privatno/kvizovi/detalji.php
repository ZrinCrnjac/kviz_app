<?php
include_once("../../konfiguracija.php");
include_once("../../predlosci/head.php");
include_once("../../predlosci/izbornik.php");
$id=$_GET["id"];
$izraz=$veza->prepare("select * from pitanje where kviz_id=:id");
$izraz->execute(array(
	"id"=>$id
));
$redovi=$izraz->fetchAll();
$izraz=$veza->prepare("select * from kviz where kviz_id=:id");
$izraz->execute(array(
	"id"=>$id
));
$kviz=$izraz->fetchAll(); ?>
        <div class="large-6 columns">
            <h1>Sport</h1>
            <h4>1.</h4>
            <p name="s_pitanje1"><?php echo $redovi[0]["tekst_pitanja"]; ?></p>
            <h4>2.</h4>
            <p><?php echo $redovi[1]["tekst_pitanja"]; ?></p>
        </div>
        <div class="large-6 columns">
            <h1>Kultura</h1>
            <h4>1.</h4>
            <p><?php echo $redovi[2]["tekst_pitanja"]; ?></p>
            <h4>2.</h4>
            <p><?php echo $redovi[3]["tekst_pitanja"]; ?></p>
        </div>
        <div class="large-6 columns">
            <h1>Znanost</h1>
            <h4>1.</h4>
            <p><?php echo $redovi[4]["tekst_pitanja"]; ?></p>
            <h4>1.</h4>
            <p><?php echo $redovi[5]["tekst_pitanja"]; ?></p>
        </div>
        <div class="large-6 columns">
            <h1>Povijest/Geografija</h1>
            <h4>1.</h4>
            <p><?php echo $redovi[6]["tekst_pitanja"]; ?></p>
            <h4>2.</h4>
            <p><?php echo $redovi[7]["tekst_pitanja"]; ?></p>
        </div>
        <div class="large-12 columns text-center">
            <h1>Iznenađenje</h1>
            <h4>1.</h4>
            <p><?php echo $redovi[8]["tekst_pitanja"]; ?></p>
            <h4>2.</h4>
            <p><?php echo $redovi[9]["tekst_pitanja"]; ?></p>
        </div>
    </form>
    <a href="../../javno/kvizovi/index.php">
        <button class="warning button expanded">
            Natrag
        </button>
    </a>
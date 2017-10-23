<?php
include_once("../../konfiguracija.php");
$izraz = $veza->prepare("update ekipa set naziv=:naziv, br_clanova=:br_clanova where ekipa_id=:ekipa_id");
$izraz->execute(array(
     "ekipa_id"=>$_POST["ekipa_id"],
     "naziv"=>$_POST["naziv"],
     "br_clanova"=>$_POST["br_clanova"]
    ));

header('Location: index.php');
?>

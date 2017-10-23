<?php
include_once("../../konfiguracija.php");
$izraz = $veza->prepare("insert into ekipa(naziv, br_clanova) values(:naziv, :br_clanova)");
$izraz->execute(array(
    "naziv"=>$_POST["naziv"],
    "br_clanova"=>$_POST["br_clanova"]
));

header('Location: index.php');
?>

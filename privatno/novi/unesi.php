<?php
include_once("../../konfiguracija.php");
$izraz = $veza->prepare("insert into voditelj(ime, lozinka) values(:ime, :lozinka)");
$izraz->execute(array(
    "ime"=>$_POST["ime"],
    "lozinka"=>$_POST["lozinka"]
));

header('Location: index.php');
?>

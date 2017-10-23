<?php
include_once("../../konfiguracija.php");
$izraz = $veza->prepare("update kviz set datum=:datum)");
$izraz->execute(array(
    "datum"=>$_POST["datum"]
));
$izraz = $veza->prepare("update pitanje set 
			tekst_pitanja=:s_pitanje1,
			tekst_pitanja=:s_pitanje2,
			tekst_pitanja=:k_pitanje1,
			tekst_pitanja=:k_pitanje2,
			tekst pitanja=:z_pitanje1,
			tekst_pitanja=:z_pitanje2,
			tekst pitanja=:pg_pitanje1,
			tekst_pitanja=:pg_pitanje2,
			tekst_pitanja=:i_pitanje1,
			tekst_pitanja=:i_pitanje2
        ");
$izraz->execute(array(
    "s_pitanje1" => $_POST["s_pitanje1"],
    "s_pitanje2" => $_POST["s_pitanje2"],
    "k_pitanje1" => $_POST["k_pitanje1"],
    "k_pitanje2" => $_POST["k_pitanje2"],
    "z_pitanje1" => $_POST["z_pitanje1"],
    "z_pitanje2" => $_POST["z_pitanje2"],
    "pg_pitanje1" => $_POST["pg_pitanje1"],
    "pg_pitanje2" => $_POST["pg_pitanje2"],
    "i_pitanje1" => $_POST["i_pitanje1"],
    "i_pitanje2" => $_POST["i_pitanje2"],
   ));
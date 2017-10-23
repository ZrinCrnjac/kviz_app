<?php
include_once 'konfiguracija.php';
if(!isset($_POST["korisnik"]) || !isset($_POST["korisnik"])){
	header("location: " . $putanjaAPP . "index.php");
}

$izraz=$veza->prepare("select * from voditelj where ime=:ime and lozinka=:lozinka");
$izraz->execute(array("ime"=>$_POST["ime"], "lozinka" =>$_POST["lozinka"]));
$voditelj = $izraz->fetch(PDO::FETCH_OBJ);
if($voditelj!=null){
	$_SESSION["logiran"]=$voditelj;
	header("location: " . $putanjaAPP . "index.php");
}else{
	header("location: " . $putanjaAPP . "javno/login.php?neuspio&korisnik=" . $_POST["korisnik"]);
}
?>
<?php
session_start();

include_once 'funkcije.php';

$naslov = "Nedjeljom u 7";


switch ($_SERVER["HTTP_HOST"]) {
	case 'localhost':
		$putanjaAPP="/kviz_app/";
		$mysqlHost="localhost";
		$mysqlBaza="kviz_app";
		$mysqlKorisnik="Zrin";
		$mysqlLozinka="Zrin";
		break;
	case 'kviz.byethost11.com':
		$putanjaAPP="/kviz_app/";
		$mysqlHost="sql101.byethost11.com";
		$mysqlBaza="b11_20161227_kviz";
		$mysqlKorisnik="b11_20161227";
		$mysqlLozinka="Cw9pCa0v";
		break;
	default:
		$putanjaAPP="/";
		break;
}

try{
	$veza = new PDO("mysql:host=" . $mysqlHost. ";dbname=" . $mysqlBaza,$mysqlKorisnik,$mysqlLozinka);
	$veza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$veza->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$veza->exec("SET CHARACTER SET utf8");
	$veza->exec("SET NAMES utf8");
}catch(PDOException $e){
	switch ($e->getCode()) {
		case 2002:
			echo "Ne mogu se spojiti na MySQL server";
			break;
		case 1049:
			echo "Na MySQL serveru ne postoji baza s danim imenom";
			break;
		case 1045:
			echo "Na MySQL serveru ne postoji kombinacija danog korisničkom imena i lozinke";
			break;
		default:
			print_r($e);
			break;
	}
	exit;
}
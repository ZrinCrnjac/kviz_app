<?php
include_once('../../konfiguracija.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $izraz = $veza->prepare("delete from pitanje where kviz_id = :id");
    $izraz->execute(array('id' => $id));}
    $izraz = $veza->prepare("delete from kviz where kviz_id = :id");
    $izraz->execute(array('id' => $id));
header('Location: ../../javno/kvizovi/index.php');
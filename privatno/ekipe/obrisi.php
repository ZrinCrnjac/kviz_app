<?php
include_once('../../konfiguracija.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $izraz = $veza->prepare("delete from ekipa where ekipa_id = :id");
    $izraz->execute(array('id' => $id));
}
header('Location: index.php');
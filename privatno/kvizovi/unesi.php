<?php
include_once("../../konfiguracija.php");
$izraz = $veza->prepare("insert into kviz(datum) values(:datum)");
$izraz->execute(array(
    "datum"=>$_POST["datum"]
));
$izraz = $veza->prepare("select MAX(kviz_id) from kviz");
$izraz->execute();
$id=$izraz->fetch();
$lastId=$id['MAX(kviz_id)'];
$izraz = $veza->prepare("insert into pitanje(tekst_pitanja, kategorija_id,kviz_id) values
            (:s_pitanje1,1,:id1),
            (:s_pitanje2,1,:id2),
            (:k_pitanje1,2,:id3),
            (:k_pitanje2,2,:id4),
            (:z_pitanje1,3,:id5),
            (:z_pitanje2,3,:id6),
            (:pg_pitanje1,4,:id7),
            (:pg_pitanje2,4,:id8),
            (:i_pitanje1,5,:id9),
            (:i_pitanje2,5,:id10)
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
    "id1" => $lastId,
    "id2" => $lastId,
    "id3" => $lastId,
    "id4" => $lastId,
    "id5" => $lastId,
    "id6" => $lastId,
    "id7" => $lastId,
    "id8" => $lastId,
    "id9" => $lastId,
    "id10" => $lastId
   ));
/*
 $izraz = $veza->prepare("insert into pitanje(tekst_pitanja, kategorija_id) values
             (:pitanje1, :kategorija_id),
             (:pitanje2, :kategorija_id),
             (:pitanje3, :kategorija_id),
             (:pitanje4, :kategorija_id),
             (:pitanje5, :kategorija_id),
             (:pitanje6, :kategorija_id),
             (:pitanje7, :kategorija_id),
             (:pitanje8, :kategorija_id),
             (:pitanje9, :kategorija_id),
             (:pitanje10, :kategorija_id),
             (:pitanje11, :kategorija_id),
             (:pitanje12, :kategorija_id),
             (:pitanje13, :kategorija_id),
             (:pitanje14, :kategorija_id),
             (:pitanje15, :kategorija_id)
 ");
 $izraz->execute(array(
     "pitanje1" => $_POST["pitanje1"],
     "pitanje2" => $_POST["pitanje2"],
     "pitanje3" => $_POST["pitanje3"],
     "pitanje4" => $_POST["pitanje4"],
     "pitanje5" => $_POST["pitanje5"],
     "pitanje6" => $_POST["pitanje6"],
     "pitanje7" => $_POST["pitanje7"],
     "pitanje8" => $_POST["pitanje8"],
     "pitanje9" => $_POST["pitanje9"],
     "pitanje10" => $_POST["pitanje10"],
     "pitanje11" => $_POST["pitanje11"],
     "pitanje12" => $_POST["pitanje12"],
     "pitanje13" => $_POST["pitanje13"],
     "pitanje14" => $_POST["pitanje14"],
     "pitanje15" => $_POST["pitanje15"],
     "kategorija_id" => $_POST["kategorija_id"]
 ));*/
header('Location: ../../javno/kvizovi/index.php');
?>

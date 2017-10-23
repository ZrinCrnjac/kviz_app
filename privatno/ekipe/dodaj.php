<?php
include_once("../../konfiguracija.php");
include_once("../../predlosci/head.php");
include_once("../../predlosci/izbornik.php");
?>
<form action="unesi.php" method="post">
    <label for="naziv">Ime ekipe</label>
    <input type="text" name="naziv">
    <label for="br_clanova">Broj članova</label>
    <input type="text" name="br_clanova">
    <button type="submit" class="success button expanded">Potvrdi</button>
    <a href="index.php">
        <button class="warning button expanded">
            Odustani
        </button>
    </a>
</form>
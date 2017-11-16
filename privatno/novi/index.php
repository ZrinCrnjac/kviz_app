<?php
include_once("../../konfiguracija.php");
include_once("../../predlosci/head.php");
include_once("../../predlosci/izbornik.php");
?>
<form action="unesi.php" method="post">
    <label for="ime">Ime voditelja</label>
    <input type="text" name="ime">
    <label for="lozinka">Broj članova</label>
    <input type="text" name="lozinka">
    <button type="submit" class="success button expanded">Potvrdi</button>
    <a href="index.php">
        <button class="warning button expanded">
            Odustani
        </button>
    </a>
</form>
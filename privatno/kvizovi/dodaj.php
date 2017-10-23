<?php
include_once("../../konfiguracija.php");
include_once("../../predlosci/head.php");
include_once("../../predlosci/izbornik.php");
?>
<form action="unesi.php" method="post">
    <label for="datum">Datum kviza</label>
    <input type="date" name="datum">
        <div class="large-6 columns">
            <h1>Sport</h1>
            <input type="hidden"  name="kategorija_id1" value="1">
            <label for="s_pitanje1">1.</label>
            <input type="text" name="s_pitanje1">
            <label for="s_pitanje2">2.</label>
            <input type="text" name="s_pitanje2">
            <!--
            <label for="pitanje3">3.</label>
            <input type="text" name="pitanje3" required>
            <label for="pitanje4">4.</label>
            <input type="text" name="pitanje4" required>
            <label for="pitanje5">5.</label>
            <input type="text" name="pitanje5" required>
            <label for="pitanje6">6.</label>
            <input type="text" name="pitanje6" required>
            <label for="pitanje7">7.</label>
            <input type="text" name="pitanje7" required>
            <label for="pitanje8">8.</label>
            <input type="text" name="pitanje8" required>
            <label for="pitanje9">9.</label>
            <input type="text" name="pitanje9" required>
            <label for="pitanje10">10.</label>
            <input type="text" name="pitanje10" required>
            -->
        </div>
        <div class="large-6 columns">
            <h1>Kultura</h1>
            <input type="hidden"  name="kategorija_id2" value="2">
            <label for="k_pitanje1">1.</label>
            <input type="text" name="k_pitanje1">
            <label for="k_pitanje2">2.</label>
            <input type="text" name="k_pitanje2">
            <!--
            <label for="pitanje3">3.</label>
            <input type="text" name="pitanje3" required>
            <label for="pitanje4">4.</label>
            <input type="text" name="pitanje4" required>
            <label for="pitanje5">5.</label>
            <input type="text" name="pitanje5" required>
            <label for="pitanje6">6.</label>
            <input type="text" name="pitanje6" required>
            <label for="pitanje7">7.</label>
            <input type="text" name="pitanje7" required>
            <label for="pitanje8">8.</label>
            <input type="text" name="pitanje8" required>
            <label for="pitanje9">9.</label>
            <input type="text" name="pitanje9" required>
            <label for="pitanje10">10.</label>
            <input type="text" name="pitanje10" required>
            -->
        </div>
        <div class="large-6 columns">
            <h1>Znanost</h1>
            <input type="hidden"  name="kategorija_id3" value="3">
            <label for="z_pitanje1">1.</label>
            <input type="text" name="z_pitanje1">
            <label for="z_pitanje2">2.</label>
            <input type="text" name="z_pitanje2">
            <!--
            <label for="pitanje3">3.</label>
            <input type="text" name="pitanje3" required>
            <label for="pitanje4">4.</label>
            <input type="text" name="pitanje4" required>
            <label for="pitanje5">5.</label>
            <input type="text" name="pitanje5" required>
            <label for="pitanje6">6.</label>
            <input type="text" name="pitanje6" required>
            <label for="pitanje7">7.</label>
            <input type="text" name="pitanje7" required>
            <label for="pitanje8">8.</label>
            <input type="text" name="pitanje8" required>
            <label for="pitanje9">9.</label>
            <input type="text" name="pitanje9" required>
            <label for="pitanje10">10.</label>
            <input type="text" name="pitanje10" required>
            -->
        </div>
        <div class="large-6 columns">
            <h1>Povijest/Geografija</h1>
            <input type="hidden" name="kategorija_id4" value="4">
            <label for="pg_pitanje1">1.</label>
            <input type="text" name="pg_pitanje1">
            <label for="pg_pitanje2">2.</label>
            <input type="text" name="pg_pitanje2">
            <!--
            <label for="pitanje3">3.</label>
            <input type="text" name="pitanje3" required>
            <label for="pitanje4">4.</label>
            <input type="text" name="pitanje4" required>
            <label for="pitanje5">5.</label>
            <input type="text" name="pitanje5" required>
            <label for="pitanje6">6.</label>
            <input type="text" name="pitanje6" required>
            <label for="pitanje7">7.</label>
            <input type="text" name="pitanje7" required>
            <label for="pitanje8">8.</label>
            <input type="text" name="pitanje8" required>
            <label for="pitanje9">9.</label>
            <input type="text" name="pitanje9" required>
            <label for="pitanje10">10.</label>
            <input type="text" name="pitanje10" required>
            -->
        </div>
        <div class="large-12 columns">
            <h1 class="text-center">Iznenađenje</h1>
            <input type="hidden" name="kategorija_id5" value="5">
            <label for="i_pitanje1">1.</label>
            <input type="text" name="i_pitanje1">
            <label for="i_pitanje2">2.</label>
            <input type="text" name="i_pitanje2">
            <!--
            <label for="pitanje3">3.</label>
            <input type="text" name="pitanje3" required>
            <label for="pitanje4">4.</label>
            <input type="text" name="pitanje4" required>
            <label for="pitanje5">5.</label>
            <input type="text" name="pitanje5" required>
            <label for="pitanje6">6.</label>
            <input type="text" name="pitanje6" required>
            <label for="pitanje7">7.</label>
            <input type="text" name="pitanje7" required>
            <label for="pitanje8">8.</label>
            <input type="text" name="pitanje8" required>
            <label for="pitanje9">9.</label>
            <input type="text" name="pitanje9" required>
            <label for="pitanje10">10.</label>
            <input type="text" name="pitanje10" required>
            <label for="pitanje11">11.</label>
            <input type="text" name="pitanje11" required>
            <label for="pitanje12">12.</label>
            <input type="text" name="pitanje12" required>
            <label for="pitanje13">13.</label>
            <input type="text" name="pitanje13" required>
            <label for="pitanje14">14.</label>
            <input type="text" name="pitanje14" required>
            <label for="pitanje15">15.</label>
            <input type="text" name="pitanje15" required>
            -->
        </div>
        <button type="submit" class="success button expanded">Potvrdi</button>
    </form>
    <a href="../../javno/kvizovi/index.php">
        <button class="warning button expanded">
            Odustani
        </button>
    </a>

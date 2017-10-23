<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="example-menu"></button>
  <div class="title-bar-title">
  	<a href="<?php echo $putanjaAPP;  ?>index.php">
  		<?php echo $naslov; ?>
  	</a>
  </div>
</div>

<div class="top-bar" id="example-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text hide-for-small-only">
      	<li><a href="<?php echo $putanjaAPP;  ?>index.php">Početna</a></li>
      	<?php if(isset($_SESSION['logiran'])): ?>
            <li><a href="<?php echo $putanjaAPP;  ?>privatno/ekipe/index.php">Ekipe</a></li>
            <li><a href="<?php echo $putanjaAPP;  ?>privatno/rezultati/index.php">Rezultati</a></li>
        <?php endif; ?>
      	<li><a href="<?php echo $putanjaAPP;  ?>javno/kvizovi/index.php">Kvizovi</a></li>
      	<li><a href="<?php echo $putanjaAPP;  ?>javno/onama.php">O nama</a></li>
      	<li><a href="<?php echo $putanjaAPP;  ?>javno/era.php">ERA</a></li>
      </li>
   </ul>
 </div>
 	<div class="top-bar-right">
 		<ul class="dropdown menu" data-dropdown-menu>
   		<li><?php if(!isset($_SESSION["logiran"])): ?>
      	<a href="<?php echo $putanjaAPP;  ?>javno/login.php" class="button expanded">Login</a>
      	<?php else: ?>
      	<a href="<?php echo $putanjaAPP;  ?>javno/logout.php" class="alert button expanded">Logout 
      		<?php echo $_SESSION["logiran"]->ime; ?></a>
      	<?php endif; ?></li>
      	</ul>	
    </div>
</div>
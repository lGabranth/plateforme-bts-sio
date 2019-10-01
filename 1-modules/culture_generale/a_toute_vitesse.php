<?php include("../../0-config/config-genos.php"); 
	$partie = (isset($_GET["partie"]) && !empty($_GET["partie"])) ? $_GET["partie"] : 0;
	if ($partie > 3 || $partie === 0) header("Location:a_toute_vitesse.php?partie=1");
?>
<!DOCTYPE html>
<html lang="en">
  
  <?php Head("Culture Général - Accueil", 2, 3); ?>
  <section class="container mt-5" id="app">
    <div class="row text-center">
      <div class="col alert alert-info">
        <h1><i class="fas fa-exclamation-triangle"></i> PAGE EN COURS DE CREATION<i class="fas fa-exclamation-triangle"></i></h1>
      </div>
    </div>
  </section>
  <?php Js(); ?>
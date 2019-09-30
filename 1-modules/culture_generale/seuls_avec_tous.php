<?php include("../../0-config/config-genos.php"); 
	$partie = (isset($_GET["partie"]) && !empty($_GET["partie"])) ? $_GET["partie"] : 0;
	if ($partie > 3 || $partie === 0) header("Location:seuls_avec_tous.php?partie=1");
?>
<!DOCTYPE html>
<html lang="en">
  
  <?php Head("Culture Général - Accueil", 2, 2); ?>
  <?php if ($partie > 1 && $partie < 4) { ?>
  	<a href="seuls_avec_tous.php?partie=<?php echo ($partie == 2) ? 1 : 2 ?>" style="position: fixed; top: 135px; left: 5px; color: black;">
  		<i class="fas fa-arrow-left"></i>
  		<?php echo ($partie == 2) ? 'Partie 1' : 'Partie 2' ?>
  	</a>
  <?php } ?>
  <?php if ($partie < 3 && $partie > 0) { ?>
  	<a href="seuls_avec_tous.php?partie=<?php echo ($partie == 1) ? 2 : 3 ?>" style="position: fixed; top: 135px; right: 5px; color: black;">
  		<?php echo ($partie == 1) ? 'Partie 2' : 'Partie 3' ?>
  		<i class="fas fa-arrow-right"></i>
  	</a>
  <?php } ?>
  <section class="container">
  	<article class="row">
  		<div class="col">
  			<h1>Seuls avec Tous</h1>
  		</div>
  	</article>

  	<article class="row">
  		<div class="col bloc"></div>
  	</article>
  	<br>
  	<article class="row">
  		<div class="col <?php echo ($partie > 0 && $partie < 4) ? 'bloc' : ''; ?> mb-3">
  			<h2 class="mt-3 text-center">
  				<?php  
  					if ($partie == 1) echo "Partie 1 : \"Moi seul\" ; L'individu, centre du monde";
  					else if ($partie == 2) echo "Partie 2 : Ensemble ; Forces et faiblesses du groupe";
  					else if ($partie == 3) echo "Partie 3 : Les autres et moi ; vers un nouveau contrat social";
  				?>
  			</h2>
  			<hr>
				<?php 
					if ($partie == 1) {
						include("seuls_avec_tous_doc/partie_1.php");
					}
					else if ($partie  == 2) {
						include("seuls_avec_tous_doc/partie_2.php");
					}
					else if ($partie == 3) {
						include("seuls_avec_tous_doc/partie_3.php");
					}
					else
					{ ?>
						<div class="alert alert-warning">
							<h1>Cette partie du cours n'existe pas.</h1>
						</div>
				<?php 
					}
				?>

				<div class="row mb-2">
					<div class="col"></div>
				</div>
  		</div>
  	</article>
  </section>
  <?php Js(); ?>
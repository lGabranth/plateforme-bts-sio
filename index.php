<?php include("0-config/config-genos.php"); ?>
<!DOCTYPE html>
<html lang="en">
  
  <?php Head("Accueil", 1, 0); ?>
  <section class="container">
  	<div class="row">
  		<div class="col">
  			<h1>Accueil</h1>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col bloc">
  		</div>
  	</div>
		
		<br>

  	<div class="row ml-auto animated zoomIn">
  		<div class="col">
  			<div class="card text-center" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-title">Culture générale</h5>
				    <p><small>Mme Charabidze</small></p>
				    <hr>
				    <a href="<?php echo RACINE_GLOBAL_RELATIF ?>1-modules/culture_generale" class="btn"><!-- Aller --><i class="fas fa-external-link-alt"></i></a>
				  </div>
				</div>
			</div>
			<div class="col">
				<div class="card text-center" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-title">Mathématiques</h5>
				    <p><small>Equipe de M. Ben Achour</small></p>
				    <hr>
				    <a href="<?php echo RACINE_GLOBAL_RELATIF ?>1-modules/maths" class="btn"><i class="fas fa-external-link-alt"></i></a>
				  </div>
				</div>
			</div>
			<div class="col">
				<div class="card text-center" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-title">EDM</h5>
				    <p><small>Messieurs Lion & Belqadi</small></p>
				    <hr>
				    <a href="<?php echo RACINE_GLOBAL_RELATIF ?>1-modules/edm" class="btn"><i class="fas fa-external-link-alt"></i></a>
				  </div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<div class="row ml-auto animated zoomIn">
			<div class="col">
				<div class="card text-center" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-title">Anglais</h5>
				    <p><small>Mme Guidi</small></p>
				    <hr>
				    <a href="<?php echo RACINE_GLOBAL_RELATIF ?>1-modules/anglais" class="btn"><i class="fas fa-external-link-alt"></i></a>
				  </div>
				</div>
			</div>
			<div class="col">
				<div class="card text-center" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-title">Réseau</h5>
				    <p><small>Messieurs Taleb, Rahoual et Ait</small></p>
				    <hr>
				    <a href="<?php echo RACINE_GLOBAL_RELATIF ?>1-modules/reseau" class="btn"><i class="fas fa-external-link-alt"></i></a>
				  </div>
				</div>
			</div>
			<div class="col">
				<div class="card text-center" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-title">Développement</h5>
				    <p><small>Messieurs Larrat, Poivey et Boye</small></p>
				    <hr>
				    <a href="<?php echo RACINE_GLOBAL_RELATIF ?>1-modules/developpement" class="btn"><i class="fas fa-external-link-alt"></i></a>
				  </div>
				</div>
  		</div>
  	</div>
  </section>
  <?php Js(); ?>
</html>
<?php include("../../0-config/config-genos.php"); ?>
<!DOCTYPE html>
<html lang="en">
  
  <?php Head("Simulation obtention BTS SIO", 8, 0); ?>
  <section class="container">
  	<div class="row">
  		<h1>Accueil</h1>
  	</div>
  	<div class="row">
  		<div class="col bloc">
  		</div>
  	</div>

  	<br>

		<form action="index.php" method="POST" class="form-group">
			<!-- Coefficient des matières de BTS en examen : 
				- Culture G : 2;
				- Mathématiques : 2;
				- Anglais : 2;
				- Algorithmique appliquée : 1;
				- Economie : 1;
				- Droit : 1;
				- Management : 1;
				- E4 : 4;
				- E5 : 5;
				- E6 : 3;
				---- OPTIONS FACULTATIVES ----
				- LV2 : 1;
				- Maths appro : 1;
			-->
	  	<div class="row">
	  		<div class="col-md-6">
	  			<div class="row mb-2">
							<div class="col-md-8">
								<label for="noteCultureG">Culture Générale <small>(coefficient <strong>2</strong>)</small> : </label>
							</div>
							<div class="col-md-4">
								<input id="noteCultureG" name="noteCultureG" type="number" class="form-control">
							</div>
	  			</div>

	  			<div class="row mb-2">
							<div class="col-md-8">
								<label for="noteMaths">Mathématiques <small>(coefficient <strong>2</strong>)</small> : </label>
							</div>
							<div class="col-md-4">
								<input id="noteMaths" name="noteMaths" type="number" class="form-control">
							</div>
	  			</div>

	  			<div class="row mb-2">
							<div class="col-md-8">
								<label for="noteAnglais">Anglais <small>(coefficient <strong>2</strong>)</small> : </label>
							</div>
							<div class="col-md-4">
								<input id="noteAnglais" name="noteAnglais" type="number" class="form-control">
							</div>
	  			</div>

				</div>

				<div class="col-md-6 <?php (!isset($_POST["submit"]) || empty($_POST["submit"])) ? 'alert alert-info' : 'bloc' ?>">
					<?php if (!isset($_POST["submit"]) || empty($_POST["submit"])) { ?>
						<h2 class="alert alert-info text-center">Veuillez saisir vos notes.</h2>
					<?php } ?>
				</div>
			</div>
		</form>

  </section>
  <?php Js(); ?>
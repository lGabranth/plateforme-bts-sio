<?php include("../../0-config/config-genos.php"); ?>
<!DOCTYPE html>
<html lang="en">
  
  <?php Head("Simulation obtention BTS SIO", 8, 0); ?>
  <main id="app">
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
					- EDM : 3;
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
								<div class="col-md-3">
									<input id="noteCultureG" name="noteCultureG" type="number" min="0" max="20" class="form-control" v-model="culture_generale">
								</div>
								<div class="col-md-1 mt-2">
									<span v-if="culture_generale == ''"  class="text-danger"><i class="fas fa-ban"></i></span>
									<span v-else-if="culture_generale < 10" class="text-danger"><i class="far fa-frown"></i></span>
									<span v-else-if="culture_generale > 10" class="text-success"><i class="far fa-smile"></i></span>
									<span v-else class="text-warning"><i class="far fa-meh"></i></span>
								</div>
		  			</div>

		  			<div class="row mb-2">
								<div class="col-md-8">
									<label for="noteAnglais">Anglais <small>(coefficient <strong>2</strong>)</small> : </label>
								</div>
								<div class="col-md-3">
									<input id="noteAnglais" name="noteAnglais" type="number" min="0" max="20" class="form-control" v-model="anglais">
								</div>
								<div class="col-md-1 mt-2">
									<span v-if="anglais == ''"  class="text-danger"><i class="fas fa-ban"></i></span>
									<span v-else-if="anglais < 10" class="text-danger"><i class="far fa-frown"></i></span>
									<span v-else-if="anglais > 10" class="text-success"><i class="far fa-smile"></i></span>
									<span v-else class="text-warning"><i class="far fa-meh"></i></span>
								</div>
		  			</div>

		  			<div class="row mb-2">
								<div class="col-md-8">
									<label for="noteMaths">Mathématiques <small>(coefficient <strong>2</strong>)</small> : </label>
								</div>
								<div class="col-md-3">
									<input id="noteMaths" name="noteMaths" type="number" min="0" max="20" class="form-control" v-model="maths">
								</div>
								<div class="col-md-1 mt-2">
									<span v-if="maths == ''"  class="text-danger"><i class="fas fa-ban"></i></span>
									<span v-else-if="maths < 10" class="text-danger"><i class="far fa-frown"></i></span>
									<span v-else-if="maths > 10" class="text-success"><i class="far fa-smile"></i></span>
									<span v-else class="text-warning"><i class="far fa-meh"></i></span>
								</div>
		  			</div>

		  			<div class="row mb-2">
								<div class="col-md-8">
									<label for="noteAlgorithmie">Algorithmie <small>(coefficient <strong>1</strong>)</small> : </label>
								</div>
								<div class="col-md-3">
									<input id="noteAlgorithmie" name="noteAlgorithmie" type="number" min="0" max="20" class="form-control" v-model="algorithmie">
								</div>
								<div class="col-md-1 mt-2">
									<span v-if="algorithmie == ''"  class="text-danger"><i class="fas fa-ban"></i></span>
									<span v-else-if="algorithmie < 10" class="text-danger"><i class="far fa-frown"></i></span>
									<span v-else-if="algorithmie > 10" class="text-success"><i class="far fa-smile"></i></span>
									<span v-else class="text-warning"><i class="far fa-meh"></i></span>
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
  </main>
  <?php Js(); ?>
  <script src="app.vue.js"></script>
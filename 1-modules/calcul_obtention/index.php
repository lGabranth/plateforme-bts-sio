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

		  			<div class="row mb-2">
								<div class="col-md-8">
									<label for="noteEDM">Economie/Droit/Management <small>(coefficient <strong>3</strong>)</small> : </label>
								</div>
								<div class="col-md-3">
									<input id="noteEDM" name="noteEDM" type="number" min="0" max="20" class="form-control" v-model="edm">
								</div>
								<div class="col-md-1 mt-2">
									<span v-if="edm == ''"  class="text-danger"><i class="fas fa-ban"></i></span>
									<span v-else-if="edm < 10" class="text-danger"><i class="far fa-frown"></i></span>
									<span v-else-if="edm > 10" class="text-success"><i class="far fa-smile"></i></span>
									<span v-else class="text-warning"><i class="far fa-meh"></i></span>
								</div>
		  			</div>

		  			<div class="row mb-2">
								<div class="col-md-8">
									<label for="noteE4">Conception et maintenance de solutions informatiques <small>(coefficient <strong>4</strong>)</small> : </label>
								</div>
								<div class="col-md-3">
									<input id="noteE4" name="noteE4" type="number" min="0" max="20" class="form-control" v-model="e4">
								</div>
								<div class="col-md-1 mt-2">
									<span v-if="e4 == ''"  class="text-danger"><i class="fas fa-ban"></i></span>
									<span v-else-if="e4 < 10" class="text-danger"><i class="far fa-frown"></i></span>
									<span v-else-if="e4 > 10" class="text-success"><i class="far fa-smile"></i></span>
									<span v-else class="text-warning"><i class="far fa-meh"></i></span>
								</div>
		  			</div>

		  			<div class="row mb-2">
								<div class="col-md-8">
									<label for="noteE5">Production et fourniture de services informatiques <small>(coefficient <strong>5</strong>)</small> : </label>
								</div>
								<div class="col-md-3">
									<input id="noteE5" name="noteE5" type="number" min="0" max="20" class="form-control" v-model="e5">
								</div>
								<div class="col-md-1 mt-2">
									<span v-if="e5 == ''"  class="text-danger"><i class="fas fa-ban"></i></span>
									<span v-else-if="e5 < 10" class="text-danger"><i class="far fa-frown"></i></span>
									<span v-else-if="e5 > 10" class="text-success"><i class="far fa-smile"></i></span>
									<span v-else class="text-warning"><i class="far fa-meh"></i></span>
								</div>
		  			</div>

		  			<div class="row mb-2">
								<div class="col-md-8">
									<label for="noteE6">Parcours de professionnalisation <small>(coefficient <strong>3</strong>)</small> : </label>
								</div>
								<div class="col-md-3">
									<input id="noteE6" name="noteE6" type="number" min="0" max="20" class="form-control" v-model="e6">
								</div>
								<div class="col-md-1 mt-2">
									<span v-if="e6 == ''"  class="text-danger"><i class="fas fa-ban"></i></span>
									<span v-else-if="e6 < 10" class="text-danger"><i class="far fa-frown"></i></span>
									<span v-else-if="e6 > 10" class="text-success"><i class="far fa-smile"></i></span>
									<span v-else class="text-warning"><i class="far fa-meh"></i></span>
								</div>
		  			</div>

		  			<hr>
		  			<div class="form-check">
		  				<input type="checkbox" class="form-check-input" id="cbx-matieres-secondaires" true-value="1" false-value="0" v-model="matieres_option">
		  				<label for="cbx-matieres-secondaires" class="form-check-value">Je suis inscrit a une/plusieurs matière optionnelles</label>
		  			</div>
						<br>
		  			<div v-if="matieres_option == 1">
		  				<div class="row mb-2">
								<div class="col-md-8">
									<label for="noteMathsAppro">Mathématiques approfondies <small>(coefficient <strong>1</strong>)</small> : </label>
								</div>
								<div class="col-md-3">
									<input id="noteMathsAppro" name="noteMathsAppro" type="number" min="0" max="20" class="form-control" v-model="math_appro">
								</div>
								<div class="col-md-1 mt-2">
									<span v-if="math_appro == ''"  class="text-danger"><i class="fas fa-ban"></i></span>
									<span v-else-if="math_appro < 10" class="text-danger"><i class="far fa-frown"></i></span>
									<span v-else-if="math_appro > 10" class="text-success"><i class="far fa-smile"></i></span>
									<span v-else class="text-warning"><i class="far fa-meh"></i></span>
								</div>
		  				</div>

		  				<div class="row mb-2">
								<div class="col-md-8">
									<label for="noteLangueVivante">Langue secondaire <small>(coefficient <strong>1</strong>)</small> : </label>
								</div>
								<div class="col-md-3">
									<input id="noteLangueVivante" name="noteLangueVivante" type="number" min="0" max="20" class="form-control" v-model="langue_vivante">
								</div>
								<div class="col-md-1 mt-2">
									<span v-if="langue_vivante == ''"  class="text-danger"><i class="fas fa-ban"></i></span>
									<span v-else-if="langue_vivante < 10" class="text-danger"><i class="far fa-frown"></i></span>
									<span v-else-if="langue_vivante > 10" class="text-success"><i class="far fa-smile"></i></span>
									<span v-else class="text-warning"><i class="far fa-meh"></i></span>
								</div>
		  				</div>
		  			</div>

					</div>

					<div class="col-md-6 <?php (!isset($_POST["submit"]) || empty($_POST["submit"])) ? 'alert alert-info' : 'bloc' ?>">
						<?php if (!isset($_POST["submit"]) || empty($_POST["submit"])) { ?>
							<h2 class="alert alert-info text-center">Veuillez saisir vos notes.</h2>
						<?php } else { ?>
							
						<?php } ?>
					</div>
				</div>
			</form>

	  </section>
  </main>
  <?php Js(); ?>
  <script src="app.vue.js"></script>
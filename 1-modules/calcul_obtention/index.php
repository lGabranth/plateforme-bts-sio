<?php include("../../0-config/config-genos.php"); ?>
<!DOCTYPE html>
<html lang="en">
  
  <?php Head("Simulation obtention BTS SIO", 8, 0); ?>
  <main id="app" v-cloak>
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
									<input id="noteCultureG" name="noteCultureG" type="number" required min="0" max="20" class="form-control" v-model="culture_generale">
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
									<input id="noteAnglais" name="noteAnglais" type="number" required min="0" max="20" class="form-control" v-model="anglais">
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
									<input id="noteMaths" name="noteMaths" type="number" required min="0" max="20" class="form-control" v-model="maths">
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
									<input id="noteAlgorithmie" name="noteAlgorithmie" type="number" required min="0" max="20" class="form-control" v-model="algorithmie">
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
									<input id="noteEDM" name="noteEDM" type="number" required min="0" max="20" class="form-control" v-model="edm">
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
									<input id="noteE4" name="noteE4" type="number" required min="0" max="20" class="form-control" v-model="e4">
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
									<input id="noteE5" name="noteE5" type="number" required min="0" max="20" class="form-control" v-model="e5">
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
									<input id="noteE6" name="noteE6" type="number" required min="0" max="20" class="form-control" v-model="e6">
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
		  				<label for="cbx-matieres-secondaires" class="form-check-value">Je suis inscrit a une/plusieurs matière(s) optionnelle(s)</label>
		  			</div>
						<br>
		  			<div v-if="matieres_option == 1">
		  				<div class="row mb-2">
								<div class="col-md-8">
									<label for="noteMathsAppro">Mathématiques approfondies <small>(coefficient <strong>1</strong>)</small> : </label>
								</div>
								<div class="col-md-3">
									<input id="noteMathsAppro" name="noteMathsAppro" type="number" :required="matieres_option == 1" min="0" max="20" class="form-control" v-model="math_appro">
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
									<input id="noteLangueVivante" name="noteLangueVivante" type="number" :required="matieres_option == 1" min="0" max="20" class="form-control" v-model="langue_vivante">
								</div>
								<div class="col-md-1 mt-2">
									<span v-if="langue_vivante == ''"  class="text-danger"><i class="fas fa-ban"></i></span>
									<span v-else-if="langue_vivante < 10" class="text-danger"><i class="far fa-frown"></i></span>
									<span v-else-if="langue_vivante > 10" class="text-success"><i class="far fa-smile"></i></span>
									<span v-else class="text-warning"><i class="far fa-meh"></i></span>
								</div>
		  				</div>
		  			</div>
						
						<div class="text-right">
		  				<input v-show="autorise == 1" type="submit" class="btn btn-sm btn-outline-primary" value="Valider" name="submit" id="submit">
		  				<a href="#" v-show="autorise == 0" class="btn btn-sm btn-outline-dark" style="cursor:not-allowed;">Valider</a>
						</div>

					</div>

					<div class="col-md-6">
						<?php if (!isset($_POST["submit"]) || empty($_POST["submit"])) { ?>
							<h2 class="alert alert-info text-center">Veuillez saisir vos notes.</h2>
						<?php } else { 
							$noteCultureG = (isset($_POST["noteCultureG"]) && (!empty($_POST["noteCultureG"]) && $_POST["noteCultureG"] != 0)) ? $_POST["noteCultureG"] : "";
							$noteAnglais = (isset($_POST["noteAnglais"]) && (!empty($_POST["noteAnglais"]) && $_POST["noteAnglais"] != 0)) ? $_POST["noteAnglais"] : "";
							$noteMaths = (isset($_POST["noteMaths"]) && (!empty($_POST["noteMaths"]) && $_POST["noteMaths"] != 0)) ? $_POST["noteMaths"] : "";
							$noteAlgorithmie = (isset($_POST["noteAlgorithmie"]) && (!empty($_POST["noteAlgorithmie"]) && $_POST["noteAlgorithmie"] != 0)) ? $_POST["noteAlgorithmie"] : "";
							$noteEDM = (isset($_POST["noteEDM"]) && (!empty($_POST["noteEDM"]) && $_POST["noteEDM"] != 0)) ? $_POST["noteEDM"] : "";
							$noteE4 = (isset($_POST["noteE4"]) && (!empty($_POST["noteE4"]) && $_POST["noteE4"] != 0)) ? $_POST["noteE4"] : "";
							$noteE5 = (isset($_POST["noteE5"]) && (!empty($_POST["noteE5"]) && $_POST["noteE5"] != 0)) ? $_POST["noteE5"] : "";
							$noteE6 = (isset($_POST["noteE6"]) && (!empty($_POST["noteE6"]) && $_POST["noteE6"] != 0)) ? $_POST["noteE6"] : "";
							$noteMathsAppro = (isset($_POST["noteMathsAppro"]) && (!empty($_POST["noteMathsAppro"]) && $_POST["noteMathsAppro"] != 0)) ? $_POST["noteMathsAppro"] : "";
							$noteLangueVivante = (isset($_POST["noteLangueVivante"]) && (!empty($_POST["noteLangueVivante"]) && $_POST["noteLangueVivante"] != 0)) ? $_POST["noteLangueVivante"] : "";

							$noteTotale = $noteCultureG*2+$noteAnglais*2+$noteMaths*2+$noteAlgorithmie+$noteEDM*3+$noteE4*4+$noteE5*5+$noteE6*3;
							$nbNote = 22;
							if($noteMathsAppro != ""){
							 $noteTotale += ($noteMathsAppro > 10) ? $noteMathsAppro-10 : 0;
							}
							if($noteLangueVivante != ""){
							 $noteTotale += ($noteLangueVivante > 10) ? $noteLangueVivante-10 : 0;
							}
							$nbPoints = round($noteTotale/$nbNote, 2);
						?>
							<div class="alert <?php echo ($noteTotale > 219) ? 'alert-success ' : 'alert-danger ' ?> text-center">
								<h2 class="mt-2"><?php echo ($noteTotale > 219) ? "Beau travail, tu as le BTS !" : "Pas de chance, tu l'auras la prochaine fois !"; ?></h2>
								<p>
									Vous avez <?php echo $nbPoints ?>/20. <br> 
									<?php 
										if ($nbPoints > 10)
										{
											echo "Ce qui signifie que vous ";
											if($nbPoints < 12) echo "n'avez certainement pas de mention. :/";
											if($nbPoints >= 12 && $nbPoints < 14) echo "avez certainement la mention assez bien !";
											if($nbPoints >= 14 && $nbPoints < 16) echo "avez certainement la mention bien !";
											if($nbPoints >= 16) echo "avez certainement la mention très bien !!!!!!!";
										}
										else echo "Il vous manque donc ".(round(10-$nbPoints,2))." points pour valider le BTS.";
									?>
								</p>
							</div>
						<?php } ?>

						<canvas id="myChart" width="400" height="400"></canvas>
					</div>
				</div>
			</form>

	  </section>
  </main>
  <?php Js(); ?>
  <script src="app.vue.js"></script>
  <script>
  	$(document).keypress(
  		function(event){
  			if(event.which == '13'){
  				event.preventDefault();
  			}
		});
  </script>
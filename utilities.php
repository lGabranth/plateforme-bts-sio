<?php 
function Head($string, $menu_active, $menu_deux){ 
	$menu_active = (isset($menu_active) && !empty($menu_active)) ? $menu_active : 0;
	$menu_deux 	 = (isset($menu_deux) 	&& !empty($menu_deux)) 	 ? $menu_deux 	: 0;
	SetRacineGlobalRelatif($_SERVER['REQUEST_URI']);
?>
	<head>
    <title><?php echo $string ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo RACINE_GLOBAL_RELATIF ?>icon.png" />
    <script src="https://kit.fontawesome.com/34d151f234.js" crossorigin="anonymous"></script>
    <style>
    	html {
			  overflow-y: scroll;
			}
    	body{
    		background-color: #EEEEEE;
    	}
    	.bloc{
    		background-color: white;
    		border: 2px solid #757D75;
    		border-radius: 12px;
    	}
    	.dropdown-menu{
    		border: 1px solid #59ABE3;
    	}
    </style>
	</head>
	<body>
		<?php Menu($menu_active, $menu_deux); ?>
<?php }

/**
* Menu de toutes les pages 
* @author cBourtoire 
*	@param [int] menu_active permet de rajouter la classe active sur la nav bar.
* @param [int] menu_deux premet de rajouter la classe active sur les dropdown de la nav bar.
*/
function Menu($menu_active, $menu_deux){ 
	if ($menu_deux > 0) $menu_deux = $menu_active.$menu_deux;
	$root_path = RACINE_GLOBAL_RELATIF;
?>
	<!-- <template id="menu"> -->
		<!-- <main id="menu"> -->
			
			<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
			  <a class="navbar-brand <?php echo ($menu_active == 1) ? 'active text-info' : ''; ?>" href="<?php echo $root_path; ?>index.php">Accueil</a>

		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle <?php echo ($menu_active == 2) ? 'active text-info' : ''; ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Culture Générale
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item <?php echo ($menu_deux == 21) ? 'active' : ''; ?>" href="<?php echo $root_path; ?>1-modules/culture_generale/methodologie.php">
		          	Méthodologie
		          </a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item <?php echo ($menu_deux == 22) ? 'active' : ''; ?>" href="<?php echo $root_path; ?>1-modules/culture_generale/seuls_avec_tous.php?partie=1">Seuls avec tous</a>
		          <a class="dropdown-item <?php echo ($menu_deux == 23) ? 'active' : ''; ?>" href="<?php echo $root_path; ?>1-modules/culture_generale/a_toute_vitesse.php?partie=1">A toute vitesse</a>
		        </div>
		      </li>

		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle <?php echo ($menu_active == 3) ? 'active text-info' : ''; ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Mathématiques
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item <?php echo ($menu_deux == 31) ? 'active' : ''; ?>" href="<?php echo $root_path; ?>1-modules/maths/formules.php">
		          	Diverses formules
		          </a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Les suites</a>
		          <a class="dropdown-item" href="#">...</a>
		        </div>
		      </li>

		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle <?php echo ($menu_active == 4) ? 'active text-info' : ''; ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          EDM
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item <?php echo ($menu_deux == 41) ? 'active' : ''; ?>" href="<?php echo $root_path; ?>1-modules/edm/economie">
		          	Economie
		          </a>
		          <a class="dropdown-item" href="<?php echo $root_path; ?>1-modules/edm/droit">Droit</a>
		          <a class="dropdown-item" href="<?php echo $root_path; ?>1-modules/edm/management">Management</a>
		        </div>
		      </li>

		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle <?php echo ($menu_active == 5) ? 'active text-info' : ''; ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Anglais
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item <?php echo ($menu_deux == 51) ? 'active' : ''; ?>" href="<?php echo $root_path; ?>1-modules/culture_generale/methodologie.php">
		          	Méthodologie
		          </a>
		          <a class="dropdown-item" href="#">?</a>
		          <a class="dropdown-item" href="#">?</a>
		        </div>
		      </li>

		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle <?php echo ($menu_active == 6) ? 'active text-info' : ''; ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Réseau
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item <?php echo ($menu_deux == 61) ? 'active' : ''; ?>" href="<?php echo $root_path; ?>1-modules/culture_generale/methodologie.php">
		          	?
		          </a>
		          <a class="dropdown-item" href="#">?</a>
		          <a class="dropdown-item" href="#">?</a>
		        </div>
		      </li>

		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle <?php echo ($menu_active == 7) ? 'active text-info' : ''; ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Développement
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item <?php echo ($menu_deux == 71) ? 'active' : ''; ?>" href="<?php echo $root_path; ?>1-modules/culture_generale/methodologie.php">
		          	?
		          </a>
		          <a class="dropdown-item" href="#">?</a>
		          <a class="dropdown-item" href="#">?</a>
		        </div>
		      </li>
						
		    </ul>

    		<a class="nav-link <?php echo ($menu_active == 8) ? 'active text-info' : 'text-muted'; ?>" href="<?php echo $root_path; ?>1-modules/calcul_obtention">Simulation</a>
			</nav>
			<br>

		<!-- </main> -->
	<!-- </template> -->

<?php }

function Js(){ ?>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<!-- <script src="<?php //echo RACINE_GLOBALE ?>js/composants/menu.comp.vue.js"></script> -->
		<script src="<?php echo RACINE_GLOBAL_RELATIF ?>js/jquery-3.4.1.slim.js"></script>
		<script src="<?php echo RACINE_GLOBAL_RELATIF ?>js/vue.js"></script>
  </body>
<?php }



?>
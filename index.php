<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Admin Dashboard</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./css/widget.css">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
	</head>
	<body>
		<!-- Début du menu Vertical -->
		<div class="row">
			<div class="col-md-3">
				<div class="nav-side-menu">
				    <div class="brand">{RE_}</div>
				    <i class="toggle-btn" data-feather="menu" data-toggle="collapse" data-target="#menu-content"></i>
				  
				        <div class="menu-list">
				  
				            <ul id="menu-content" class="menu-content collapse out">
				                <li>
				                  <a href="#">
				                  <i data-feather="book-open"></i> Tableau de bord
				                  </a>
				                </li>

				                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
				                  <a href="#"><i data-feather="users"></i> Utilisateurs <span class="arrow"></span></a>
				                </li>
				                <ul class="sub-menu collapse" id="products">
				                    <li class="active"><a href="#">Liste des utilisateurs</a></li>
				                    <li><a href="#">Bannir un utilisateur</a></li>
				                    <li><a href="#">Permissions d'utilisateur</a></li>
				                    <li><a href="#">Créer un nouveau utilisateur</a></li>
				                    <li><a href="#">Paramètre utilisateurs</a></li>
				                </ul>

				                <li data-toggle="collapse" data-target="#new" class="collapsed">
				                  <a href="#"><i data-feather="edit-3"></i> Actualité <span class="arrow"></span></a>
				                </li>
								<ul class="sub-menu collapse" id="new">
									<li>Liste des articles</li>
									<li>Ajouter un article</li>
								</ul>

				            </ul>
				     </div>
				</div>
			</div>
			<!-- Fin du menu Vertical -->
			<div class="col-md-8">
				<main role="main" class="container">
					<div class="col-md-12">
					<div class="text-align-center">
						<!-- Widgets - Stats -->
						<div class="widget stats red">
							<div class="stats-title">Membres inscrits</div>
							<div class="stats-value">200</div>
						</div>
						<!-- Widgets - Stats (END) -->

						<!-- Widgets - Stats -->
						<div class="widget stats green">
							<div class="stats-title">En ligne</div>
							<div class="stats-value">54</div>
						</div>
						<!-- Widgets - Stats (END) -->

						<!-- Widgets - Stats -->
						<div class="widget stats blue">
							<div class="stats-title">En ligne</div>
							<div class="stats-value">54</div>
						</div>
						<!-- Widgets - Stats (END) -->

						<!-- Widgets - Stats -->
						<div class="widget stats orange">
							<div class="stats-title">En ligne</div>
							<div class="stats-value">54</div>
						</div>
						<!-- Widgets - Stats (END) -->
					</div>
					<br/>

					<div class="panel-white">
						Hello World !
					</div>

					</div>
				</main>
				<footer>
					<!-- Merci de ne pas supprimer les credits. Respecter les droits d'auteurs. (contact@rodrigoesteves.fr)-->
					<div id="credit">Made by Rodrigo</div>
					<small>contact@rodrigoesteves.fr</small>
				</footer>
			</div>
		</div>

		<!-- Load Jquery & Bootstrap -->
		<script type="text/javascript" src="./assets/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="./assets/feather-icons/feather.min.js"></script>
		<script type="text/javascript" src="./assets/bootstrap/js/bootstrap.min.js"></script>
		<script>
			feather.replace();
		</script>
	</body>
</html>


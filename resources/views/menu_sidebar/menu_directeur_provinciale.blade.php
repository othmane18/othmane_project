
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

<script src="{{ asset('js/scripts.js') }}" defer></script>

<div class="wrapper">

			<!-- Sidebar -->
			<nav class="sidebar">

				<!-- close sidebar menu -->
				<div class="dismiss">
					<i class="fas fa-arrow-left"></i>
				</div>

				<div class="logo">
					<h3><a href="index.html">Tamkine Tutoring</a></h3>
				</div>

				<ul class="list-unstyled menu-elements">
					<!-- <li class="active">
						<a class="scroll-link" href="#top-content"><i class="fas fa-home"></i> Home</a>
					</li> -->

					<li>
						<a href="#GestionInsp" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
							<i class="fas fa-sync"></i>Gestion salle
						</a>
						<ul class="collapse list-unstyled" id="GestionInsp">
							<li>
								<a class="scroll-link" href="{{ route('create.salle_prv') }}">Créer une salle</a>
							</li>
							<li>
								<a class="scroll-link" href="{{ route('liste_salle_prv') }}">Liste des salles</a>
							</li>
						</ul>
                    </li>
                    <li>
						<a href="#Gestionnaire_des_salles" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
							<i class="fas fa-sync"></i>Gestionnaire des salles
						</a>
						<ul class="collapse list-unstyled" id="Gestionnaire_des_salles">
							<li>
								<a class="scroll-link" href="{{ route('create.gestion_prv') }}">Créer gestionnaire salle</a>
							</li>
							<li>
								<a class="scroll-link" href="{{ route('liste_gestion_prv') }}">Liste gestionnaire salle</a>
							</li>
						</ul>
                    </li>
				</ul>

				<div class="to-top">
					<a class="btn btn-primary btn-customized-3" href="#" role="button">
	                    <i class="fas fa-arrow-up"></i> Haut
	                </a>
				</div>

				<div class="dark-light-buttons">
					<a class="btn btn-primary btn-customized-4 btn-customized-dark" href="#" role="button">Dark</a>
					<a class="btn btn-primary btn-customized-4 btn-customized-light" href="#" role="button">Light</a>
				</div>

			</nav>
			<!-- End sidebar -->

			<!-- Dark overlay -->
    		<div class="overlay"></div>

			<!-- Content -->
			<div class="content">

				<!-- open sidebar menu -->
				<a class="btn btn-primary btn-customized open-menu" href="#" role="button">
                    <i class="fas fa-align-left"></i> <span>Menu</span>
                </a>
	        </div>

        </div>

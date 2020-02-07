
<!-- <div class=".col-md-4 float-left">
    <a href="{{ route('profile.directeur_regionale', Auth::guard('directeur_reg')->user()->id) }}" class="nav-link bg-info text-white">Mes Info</a>
    <a href="{{ route('create.inspecteur_reg') }}" class="nav-link bg-info text-white">create inspecteur_reg</a>
    <a href="{{ route('create.directeur_prov') }}" class="nav-link bg-info text-white">create directeur prov</a>
    <a href="{{ route('liste_inspecteur_regionale') }}" class="nav-link bg-info text-white">liste inspecteur régionale</a>
</div> -->

<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}"> -->
<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/media-queries.css') }}"> -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

<!-- <script src="{{ asset('js/jquery.backstretch.js') }}" defer></script>
<script src="{{ asset('js/jquery.backstretch.min.js') }}" defer></script> -->
<!-- <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}" defer></script> -->
<!-- <script src="{{ asset('js/jquery.waypoints.js') }}" defer></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}" defer></script> -->
<!-- <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script> -->
<!-- <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}" defer></script> -->
<script src="{{ asset('js/scripts.js') }}" defer></script>
<!-- <script src="{{ asset('js/waypoints.js') }}" defer></script>
<script src="{{ asset('js/waypoints.min.js') }}" defer></script>
<script src="{{ asset('js/wow.js') }}" defer></script>
<script src="{{ asset('js/wow.min.js') }}" defer></script> -->

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
						<a class="scroll-link" href="{{ route('profile.directeur_regionale', Auth::guard('directeur_reg')->user()->id) }}"><i class="fas fa-cog"></i> Mes info</a>
					</li>
					<li>
						<a href="#GestionInsp" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
							<i class="fas fa-sync"></i>Gestion inspecteurs
						</a>
						<ul class="collapse list-unstyled" id="GestionInsp">
							<li>
								<a class="scroll-link" href="{{ route('create.inspecteur_reg') }}">Créer un inspecteur</a>
							</li>
							<li>
								<a class="scroll-link" href="{{ route('liste_inspecteur_regionale') }}">Liste des inspecteurs</a>
							</li>
						</ul>
                    </li>
                    <li>
						<a href="#GestionDirP" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
							<i class="fas fa-sync"></i>Gestion directeur provinciale
						</a>
						<ul class="collapse list-unstyled" id="GestionDirP">
							<li>
								<a class="scroll-link" href="{{ route('create.directeur_prov') }}">Créer un directeur provinciale</a>
							</li>
							<li>
								<a class="scroll-link" href="{{ route('liste_directeur_provinciale') }}">Liste des directeurs provinciales</a>
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

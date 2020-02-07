@extends('layouts.authreg')

@section('content')

@include('menu_sidebar.menu_directeur_regionale')







<div class="container">

<div class="card text-center mx-4">
    <div class="card-header">
      <ul class="nav nav-pills card-header-pills">
        <li class="nav-item">
          <a class="nav-link active" href="#profile"> <i class="fas fa-user-circle"></i> Votre Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('directeur_regionale.edit' , Auth::guard('directeur_reg')->user()->id)}}"
> <i class="fas fa-user-edit"></i> Modiffier</a>
        </li>
      </ul>
    </div>

    <div class="card-body" id="profile">

<!-- Section: Team v.3 -->


    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold ">Votre Profile</h2>
    <!-- Section description -->
    <p class=" w-responsive mx-auto mb-5">Bonjour Mr:
        {{Auth::guard('directeur_reg')->user()->nom_directeurregional}}
        {{Auth::guard('directeur_reg')->user()->prenom_directeurregional}}
        ,le directeur Régional de la Fondation Tamkine,
        Vous etes la bienvenu chez nous .</p>

    <!-- Grid row-->
    <div class="row text-center ">

      <!-- Grid column -->
      <div class="col-xl-6 col-lg-12 mb-5 d-md-flex justify-content-between">
        <div class="avatar mb-md-0 mb-4 mx-4">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" class="rounded z-depth-1" alt="Sample avatar">
        </div>
        <div class="">
          <h4 class="font-weight-bold mb-3">
              {{Auth::guard('directeur_reg')->user()->nom_directeurregional}}
              {{Auth::guard('directeur_reg')->user()->prenom_directeurregional}}
            </h4>
          <h6 class="font-weight-bold grey-text mb-3">Directeur Régional</h6>
          <p class="card-text">Numéro de l'affectation {{Auth::guard('directeur_reg')->user()-> affectation }}</p>
          <p class="card-text"> Votre Téléphone {{Auth::guard('directeur_reg')->user()->telephone}}</p>
          <p class="card-text">Votre adresse domicile {{Auth::guard('directeur_reg')->user()->adresse_directeurregional}}</p>
          <p class="card-text">Votre adresse email {{Auth::guard('directeur_reg')->user()->email}}</p>


          <!-- Facebook-->
          <a class="p-2 fa-lg fb-ic">
            <i class="fab fa-facebook-f" style="color:blue"> </i>
          </a>
          <!-- Twitter -->
          <a class="p-2 fa-lg tw-ic">
            <i class="fab fa-youtube" style="color:blue"> </i>
          </a>
          <!--Dribbble -->
          <a class="p-2 fa-lg dribbble-ic">
            <i class="fab fa-instagram" style="color:blue"> </i>
          </a>
        </div>
      </div>
      <!-- Grid column -->


</div>
    </div>

    <div class="card-header text-center">
        La date d'aujourd'huit :


        <?php

          $datetime = date("Y-m-d H:i:s");
         echo $datetime;
            ?>

      </div>
  </div>
</div>


<!-- <center>
{{Auth::guard('directeur_reg')->user()->id}}
{{Auth::guard('directeur_reg')->user()->email}}

hello directeur regionale
    </center> -->



@endsection

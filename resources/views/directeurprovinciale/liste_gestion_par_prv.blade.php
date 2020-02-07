@extends('layouts.authprv')

@section('content')

@include('menu_sidebar.menu_directeur_provinciale')

<div class="row justify-content-center">
    <div class="col-md-10">
      <div id="mydiv" class="alert alert-success" role="alert">
        {{Auth::guard('directeur_prov')->user()->prenom_directeurprovinciale}} {{Auth::guard('directeur_prov')->user()->nom_directeurprovinciale}} Bien connecté

      </div>
         <!-- <div class="card">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Prenom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Aref</th>
                    <th scope="col">Direction Provinciale</th>
                    <th scope="col">Supprimer</th>
                    <th scope="col">Modifier</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @if (Auth::guard('directeur_prov')->user())
                    @foreach ($get as $g)
                    <td>{{$g->prenom_gestionsalle}}</td>
                    <td>{{$g->nom_gestionsalle}}</td>
                    <td>{{$g->email}}</td>
                    <td>{{$g->adresse_gestionsalle}}</td>
                    <td>{{$g->nomacademies}}</td>
                    <td>{{$g->nomdirectionprovinciale}}</td>
                    <td>
                       <a href="{{route('gestionprv.delete' , ['id'=> $g->id])}}" class="">
                        <i class="fas fa-trash-alt"></i>
                      </a>
                      </td>

                      <td>
                        <a href="{{route('gestionprv.edit' , ['id'=> $g->id])}}" class="">
                         <i class="fas fa-trash-alt"></i>
                       </a>
                       </td>
                  </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
    </div> -->
<div class="card">
<h3 class="card-header text-center font-weight-bold text-uppercase">Les informations DP</h3>
<div class="card-body">
  <div id="table" class="table-editable">
    <span class="table-add float-right mb-3 mr-2"><a href="create/gestion_prv" class="text-success"><i
          class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>

    <table class="table table-bordered table-responsive-md table-striped text-center">
      <thead>
        <tr>
        <th scope="col">Prenom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Aref</th>
                    <th scope="col">Direction Provinciale</th>
                    <th scope="col">Supprimer</th>
                    <th scope="col">Modifier</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        @if (Auth::guard('directeur_prov')->user())
        @foreach ($get as $g)
          <td class="pt-3-half" contenteditable="true">{{$g->prenom_gestionsalle}}</td>
          <td class="pt-3-half" contenteditable="true">{{$g->nom_gestionsalle}}</td>
          <td class="pt-3-half" contenteditable="true">{{$g->email}}</td>
          <td class="pt-3-half" contenteditable="true">{{$g->adresse_gestionsalle}}</td>
          <td class="pt-3-half" contenteditable="true">{{$g->nomacademies}}</td>
          <td class="pt-3-half" contenteditable="true">{{$g->nomdirectionprovinciale}}</td>
          <td>
          <span class="table-remove"><a href="{{route('gestionprv.delete' , ['id'=> $g->id])}}"
                        class="btn btn-danger btn-rounded btn-sm my-0" onclick="return confirm('Are you sure you want to delete this item?')"> <i class="fas fa-trash"></i> Supprimer</a></span>
          </td>
          <td>
          <span class="table-remove"><a href="{{route('gestionprv.edit' , ['id'=> $g->id])}}"
                      class="btn btn-success btn-rounded btn-sm my-0"><i class="fas fa-edit"></i> Editer</a></span>
          </td>
          </tr>
          @endforeach

          @endif


      </tbody>
    </table>
  </div>
</div>
</div>

</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">

setTimeout(function() {
        $('#mydiv').fadeOut('fast');
    }, 5000);
</script>


@endsection


@extends('layouts.authprv')

@section('content')

@include('menu_sidebar.menu_directeur_provinciale')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">
          <div id="mydiv" class="alert alert-success" role="alert">
            {{Auth::guard('directeur_prov')->user()->prenom_directeurprovinciale}} {{Auth::guard('directeur_prov')->user()->nom_directeurprovinciale}} Bien connecté

          </div>
             <!-- <div class="card">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Numero</th>
                        <th scope="col">Capacite</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aref</th>
                        <th scope="col">Direction Provinciale</th>
                        <th scope="col">Supprimer</th>
                        <th scope="col">Modifier</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @if (Auth::guard('directeur_prov')->user())
                        @foreach ($salle as $s)
                        <td>{{$s->num_salle}}</td>
                        <td>{{$s->capacite_salle}}</td>
                        <td>{{$s->email}}</td>
                        <td>{{$s->nomacademies}}</td>
                        <td>{{$s->nomdirectionprovinciale}}</td>
                        <td>
                           <a href="{{route('salleprv.delete' , ['id'=> $s->id])}}" class="">
                            <i class="fas fa-trash-alt"></i>
                          </a>
                          </td>

                          <td>
                            <a href="{{route('salleprv.edit' , ['id'=> $s->id])}}" class="">
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
    <span class="table-add float-right mb-3 mr-2"><a href="create/salle_prv" class="text-success"><i
          class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>

    <table class="table table-bordered table-responsive-md table-striped text-center">
      <thead>
        <tr>
                    <th scope="col">Prenom</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Capacite</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aref</th>
                    <th scope="col">Direction Provinciale</th>
                    <th scope="col">Supprimer</th>
                    <th scope="col">Modifier</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @if(Auth::guard('directeur_prov')->user())
          @foreach ($salle as $s)
          <td class="pt-3-half" contenteditable="true">{{$s->num_salle}}</td>
          <td class="pt-3-half" contenteditable="true">{{$s->capacite_salle}}</td>
          <td class="pt-3-half" contenteditable="true">{{$s->email}}</td>
          <td class="pt-3-half" contenteditable="true">{{$s->nomacademies}}</td>
          <td class="pt-3-half" contenteditable="true">{{$s->nomdirectionprovinciale}}</td>
          <td>
          <span class="table-remove"><a href="{{route('salleprv.delete' , ['id'=> $s->id])}}"
                        class="btn btn-danger btn-rounded btn-sm my-0" onclick="return confirm('Are you sure you want to delete this item?')"> <i class="fas fa-trash"></i> Supprimer</a></span>
          </td>
          <td>
          <span class="table-remove"><a href="{{route('gestsalleprvionprv.edit' , ['id'=> $s->id])}}"
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

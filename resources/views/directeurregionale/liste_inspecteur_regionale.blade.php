
    @extends('layouts.authreg')

@section('content')

@include('menu_sidebar.menu_directeur_regionale')


<div class="container">

<div class="card">
<h3 class="card-header text-center font-weight-bold text-uppercase">Les informations DP</h3>
<div class="card-body">
  <div id="table" class="table-editable">
    <span class="table-add float-right mb-3 mr-2"><a href="create/inspecteur_reg" class="text-success"><i
          class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>

    <table class="table table-bordered table-responsive-md table-striped text-center">
      <thead>
        <tr>
          <th class="text-center">Nom</th>
          <th class="text-center">Prénom</th>
          <th class="text-center">Téléphone</th>
          <th class="text-center">Email</th>
          <th class="text-center">Adresse</th>
          <th class="text-center">Matiere</th>
          <th class="text-center">Aref</th>
          <th class="text-center">Direction Provinciale</th>
          <th class="text-center">Supprimer</th>
          <th class="text-center">Editer</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @if (Auth::guard('directeur_reg')->user())
          @foreach ($in as $i)
          <td class="pt-3-half" contenteditable="true">{{$i->nom_inspecteur}}</td>
          <td class="pt-3-half" contenteditable="true">{{$i->prenom_inspecteur}}</td>
          <td class="pt-3-half" contenteditable="true">{{$i->telephone}}</td>
          <td class="pt-3-half" contenteditable="true">{{$i->email_inspecteur}}</td>
          <td class="pt-3-half" contenteditable="true">{{$i->adresse_inspecteur}}</td>
          <td class="pt-3-half" contenteditable="true">{{$i->liblle_matiere}}</td>
          <td class="pt-3-half" contenteditable="true">{{$i->nomacademies}}</td>
          <td class="pt-3-half" contenteditable="true">{{$i->nomdirectionprovinciale}}</td>
          <td>
          <span class="table-remove"><a href="{{route('directeurprv.delete' , ['id'=> $i->id])}}"
                        class="btn btn-danger btn-rounded btn-sm my-0" onclick="return confirm('Are you sure you want to delete this item?')"> <i class="fas fa-trash"></i> Supprimer</a></span>
          </td>
          <td>
          <span class="table-remove"><a href="{{route('directeurprv.edit' , ['id'=> $i->id])}}"
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">

  setTimeout(function() {
            $('#mydiv').fadeOut('fast');
        }, 5000);
</script>

@endsection

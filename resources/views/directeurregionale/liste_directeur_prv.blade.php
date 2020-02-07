
    @extends('layouts.authreg')

    @section('content')

    @include('menu_sidebar.menu_directeur_regionale')

    <!-- <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-10">
              <div id="mydiv" class="alert alert-success" role="alert">
                {{Auth::guard('directeur_reg')->user()->prenom_directeurregional}} {{Auth::guard('directeur_reg')->user()->nom_directeurregional}} Bien connecté

              </div>
                 <div class="card">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Aref</th>
                            <th scope="col">Direction Provinciale</th>
                            <th scope="col">Option</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @if (Auth::guard('directeur_reg')->user())
                            @foreach ($pr as $p)
                            <td>{{$p->nom_directeurprovinciale}}</td>
                            <td>{{$p->prenom_directeurprovinciale}}</td>
                            <td>{{$p->telephone}}</td>
                            <td>{{$p->email}}</td>

                            <td>{{$p->adresse_directeurprovinciale}}</td>
                            <td>{{$p->nomacademies}}</td>
                            <td>{{$p->nomdirectionprovinciale}}</td>
                            <td>
                               <a href="{{route('directeurprv.delete' , ['id'=> $p->id])}}" class="">
                                <i class="fas fa-trash-alt"></i>
                              </a>
                              </td>
                            @endforeach
                            @endif
                          </tr>
                        </tbody>

            </div>
        </div>

        </div>
    </div> -->

<div class="container">

<div class="card">
    <h3 class="card-header text-center font-weight-bold text-uppercase">Les informations DP</h3>
    <div class="card-body">
      <div id="table" class="table-editable">
        <span class="table-add float-right mb-3 mr-2"><a href="create/directeur_prov" class="text-success"><i
              class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>

        <table class="table table-bordered table-responsive-md table-striped text-center">
          <thead>
            <tr>
              <th class="text-center">Nom</th>
              <th class="text-center">Prénom</th>
              <th class="text-center">Téléphone</th>
              <th class="text-center">Email</th>
              <th class="text-center">Adresse</th>
              <th class="text-center">Aref</th>
              <th class="text-center">Direction Provinciale</th>
              <th class="text-center">Supprimer</th>
              <th class="text-center">Modifier</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @if (Auth::guard('directeur_reg')->user())
              @foreach ($pr as $p)
              <td class="pt-3-half" contenteditable="true">{{$p->nom_directeurprovinciale}}</td>
              <td class="pt-3-half" contenteditable="true">{{$p->prenom_directeurprovinciale}}</td>
              <td class="pt-3-half" contenteditable="true">{{$p->telephone}}</td>
              <td class="pt-3-half" contenteditable="true">{{$p->email}}</td>
              <td class="pt-3-half" contenteditable="true">{{$p->adresse_directeurprovinciale}}</td>
              <td class="pt-3-half" contenteditable="true">{{$p->nomacademies}}</td>
              <td class="pt-3-half" contenteditable="true">{{$p->nomdirectionprovinciale}}</td>
              <td>

                    <span class="table-remove"><a href="{{route('directeurprv.delete' , ['id'=> $p->id])}}"
                        class="btn btn-danger btn-rounded btn-sm my-0" onclick="return confirm('Are you sure you want to delete this item?')"> <i class="fas fa-trash"></i> Supprimer</a></span>
              </td>
              <td>

              <span class="table-remove"><a href="{{route('directeurprv.edit' , ['id'=> $p->id])}}"
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

 
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Liste Etablissements </div>

                    <div class="card-body">

                            <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">Nom </th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Code Grisa</th>
                                        <th scope="col">Ville</th>
                                        <th scope="col">Adresse</th>
                                        <th scope="col">Telephone</th> 
                                        <th scope="col">Modifier</th>
                                        <th scope="col">Delete</th> 
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($etat as $et)
                                           <tr>
                                           <td>{{$et->libelle_etablissement}}</td>
                                            <td>{{$et->type_etablissement}}</td>
                                            <td>{{$et->code_grisa}}</td>
                                            <td>{{$et->ville_etablissement}}</td>
                                            <td>{{$et->adresse_etablissement}}</td>
                                            <td>{{$et->telephone_etablissement}}</td>
                                            <td>

                                            <a href="{{route('etablissement.edit' , ['id'=> $et->id])}}" class=""> 
                                                <i class="fas fa-edit"></i> 
                                            </a>  
                                            </td>
                                            <td>

                                            <a href="{{route('etablissement.delete' , ['id'=> $et->id])}}" onclick="return confirm('vous voulez Supprimer Cette Etablissement . {{$et->libelle_etablissement}} ?')"> 
                                                <i class="fas fa-trash-alt"></i> 
                                            </a>     

                                            </td>
                                           </tr>  
                                        @endforeach 
                                    </tbody>
                                  </table>
                       



                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
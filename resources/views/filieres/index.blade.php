 
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Liste Filiere </div>

                    <div class="card-body">

                            <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">Nom </th> 
                                        <th scope="col">Modifier</th>
                                        <th scope="col">Delete</th> 
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($fil as $fi)
                                           <tr>
                                           <td>{{$fi->libelle_filiere}}</td> 
                                            <td>

                                            <a href="{{route('filiere.edit' , ['id'=> $fi->id])}}" class=""> 
                                                <i class="fas fa-edit"></i> 
                                            </a>  
                                            </td>
                                            <td>

                                            <a href="{{route('filiere.delete' , ['id'=> $fi->id])}}" onclick="return confirm('vous voulez Supprimer Cette Filiere . {{$fi->libelle_filiere}} ?')"> 
                                                <i class="fas fa-trash-alt"></i> 
                                            </a>     

                                            </td>
                                           </tr>  
                                        @endforeach  
                                        <td> 
                                           <a href="/filiere/create" class="btn btn-primary"> 
                                                <i class="fa fa-plus-circle "></i> Ajouter
                                            </a> 
                                            Ajouter Filiere :
                                        </td>
                                    </tbody>
                                  </table>
                       



                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
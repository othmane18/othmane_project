 
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Liste Matiere </div>

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
                                        @foreach ($matiere as $ma)
                                           <tr>
                                           <td>{{$ma->liblle_matiere}}</td> 
                                            <td>

                                            <a href="{{route('matiere.edit' , ['id'=> $ma->id])}}" class=""> 
                                                <i class="fas fa-edit"></i> 
                                            </a>  
                                            </td>
                                            <td>

                                            <a href="{{route('matiere.delete' , ['id'=> $ma->id])}}" onclick="return confirm('vous voulez Supprimer Cette Matiere . {{$ma->liblle_matiere}} ?')"> 
                                                <i class="fas fa-trash-alt"></i> 
                                            </a>     

                                            </td>
                                           </tr>  
                                        @endforeach  
                                        <td> 
                                           <a href="/matiere/create" class="btn btn-primary"> 
                                                <i class="fa fa-plus-circle "></i> Ajouter
                                            </a> 
                                            Ajouter Matiere :
                                        </td>
                                    </tbody>
                                  </table>
                       



                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
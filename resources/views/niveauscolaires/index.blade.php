 
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Liste Niveau scolaires </div>

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
                                        @foreach ($niveau as $ni)
                                           <tr>
                                           <td>{{$ni->libelleniveau_scolaire}}</td> 
                                            <td>

                                            <a href="{{route('niveauscolaire.edit' , ['id'=> $ni->id])}}" class=""> 
                                                <i class="fas fa-edit"></i> 
                                            </a>  
                                            </td>
                                            <td>

                                            <a href="{{route('niveauscolaire.delete' , ['id'=> $ni->id])}}" onclick="return confirm('vous voulez Supprimer Ce Niveauscolaire . {{$ni->libelleniveau_scolaire}} ?')"> 
                                                <i class="fas fa-trash-alt"></i> 
                                            </a>     

                                            </td>
                                           </tr>  
                                        @endforeach  
                                        <td> 
                                           <a href="/niveauscolaire/create" class="btn btn-primary"> 
                                                <i class="fa fa-plus-circle "></i> Ajouter
                                            </a> 
                                            Ajouter Niveauscolaire :
                                        </td>
                                    </tbody>
                                  </table>
                       



                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
<div class="form-group row">
    <label class="col-md-4 col-form-label text-md-right">Matieres :</label>
    <div class="col-md-6">    
    <select class="form-control" id="id_matiere_fk" name="id_matiere_fk">
        <option value="---"> --- </option>
        @foreach ($matieres as $mat)
        <option value="{{$mat->id}}">  {{$mat->liblle_matiere}}</option>
        @endforeach
    </select>
</div> 


 

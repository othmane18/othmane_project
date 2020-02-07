<div class="form-group row">
    <label class="col-md-4 col-form-label text-md-right">Filieres :</label>
    <div class="col-md-6"> 
    <select class="form-control" id="id_filiere_fk" name="id_filiere_fk">
        <option value="---"> --- </option>
        @foreach ($filieres as $fil)
        <option value="{{$fil->id}}">  {{$fil->libelle_filiere}}</option>
        @endforeach
    </select>
</div>

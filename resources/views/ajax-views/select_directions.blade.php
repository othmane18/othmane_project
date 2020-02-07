<div class="form-group row">
    <label class="col-md-4 col-form-label text-md-right">Direction Provinciale :</label>
    <div class="col-md-6">
        <select class="form-control" id="id_directions_fk" name="id_directions_fk">
            <option value="---"> --- </option>
            @foreach ($directions as $dir)
            <option value="{{$dir->id}}">{{$dir->nomdirectionprovinciale}}</option>
            @endforeach
        </select>
    </div>
</div>

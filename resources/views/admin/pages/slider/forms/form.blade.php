<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control" name="image_url">
        </div>
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label for="">DEPARTAMENTO</label>
            {!! Form::select('department_id', $departments, $data->department->id ?? old('department_id'),
            ['class'=>'form-control']) !!}
        </div>
    </div>
</div>
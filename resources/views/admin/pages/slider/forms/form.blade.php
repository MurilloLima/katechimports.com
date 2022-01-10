<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control" name="image_url">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">DEPARTAMENTO</label>
            {!! Form::select('department_id', $departments, $data->department_id ?? old('department_id'),
            ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">STATUS</label>
            {!! Form::select('status', [
            'Ativo' => 'Ativo',
            'Inativo' => 'Inativo'
            ], $data->status ?? old('status'), ['class'=>'form-control']) !!}
        </div>
    </div>
</div>
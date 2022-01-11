<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Image 1920x545</label>
            <div class="input-group">
                <div class="custom-file">
                    <label class="custom-file-label" for="exampleInputFile">Escolher arquivo</label>
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image_url">
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                </div>
            </div>
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
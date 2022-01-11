<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Image</label>
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
    <div class="col-md-8">
        <div class="form-group">
            <label for="">PRODUTO</label>
            <input type="text" class="form-control" name="name" value="{{$data->name ?? old('name')}}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">DEPARTAMENTO</label>
            {!! Form::select('department_id', $departments, $data->department_id ?? old('department_id'),
            ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label for="">VALOR</label>
            <input type="text" class="form-control money2" name="price" value="{{$data->price ?? old('price')}}">
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
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="">DESCRIÇÃO</label>
            <textarea name="descryption" class="form-control" cols="30"
                rows="10">{{$data->descryption ?? old('descryption')}}</textarea>
        </div>
    </div>
</div>
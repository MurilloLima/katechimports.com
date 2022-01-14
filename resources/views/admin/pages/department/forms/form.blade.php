<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="">NOME DEPARTAMENTO</label>
            <input type="text" name="name" class="form-control" value="{{$data->name ?? old('name')}}"
                placeholder="Nome">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">STATUS</label>
            {!! Form::select('status', [
            'Ativo' => 'Ativo',
            'Inativo' => 'Inativo',
            'Menu' => 'Menu'
            ], $data->status ?? old('status'), ['class'=>'form-control']) !!}
        </div>
    </div>
</div>
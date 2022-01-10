@extends('admin.layouts.app',['activePage' => 'slider.index'])
@section('title', 'Cadastrar')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row" style="padding-top: 15px">
                <div class="col-md-12">@include('admin.includes.alerts')</div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-body">
                            {!! Form::open(['route'=>'slider.store', 'files' => true]) !!}
                            @method('POST')
                            @include('admin.pages.slider.forms.form')
                            <button type="submit" class="btn btn-block btn-default">Cadastrar</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
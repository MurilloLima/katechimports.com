@extends('admin.layouts.app' ,['activePage' => 'product.index'])
@section('title', 'Editar')

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
                            <form action="{{ route('product.update', ['id'=>$data]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                {{-- {!! Form::open(['route'=>['product.update', 'id'=>$data]]) !!} --}}
                                @include('admin.pages.product.forms.form')
                                <button type="submit" class="btn btn-block btn-default">Editar</button>
                                {{-- {!! Form::close() !!} --}}
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
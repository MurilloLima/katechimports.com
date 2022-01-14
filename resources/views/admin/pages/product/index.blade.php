@extends('admin.layouts.app' ,['activePage' => 'product.index'])
@section('title', 'Produtos')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row" style="padding-top: 15px">
                <div class="col-md-12">@include('admin.includes.alerts')</div>
            </div>

            <div class="row" style="margin-bottom: 15px;">
                <div class="col-md-5">
                    <form action="{{ route('product.search') }}" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Pesquisar" name="value">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-info btn-default">Pesquisar</button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="col-md-7">
                    <a href="{{ route('product.create') }}" class="btn btn-default">Cadastrar</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header border-0">
                            {{-- <h3 class="card-title">Clientes</h3> --}}
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>IMAGE</th>
                                        <th>PRODUTO</th>
                                        <th>VALOR</th>
                                        <th>DEPARTAMENTO</th>
                                        <th>GALERIA</th>
                                        <th>STATUS</th>
                                        <th>DATA CADASTRO</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr>
                                        <td>
                                            <img src="{{ url("storage/products/{$item->image_url}") }}" width="100"
                                            alt="">
                                        </td>
                                        <td>{{$item->name}}</td>
                                        <td>{{number_format($item->price, 2, ',', '.')}}</td>
                                        <td>{{$item->department->name}}</td>
                                        <td><a href="{{ route('product.galery.index', ['id'=>$item->id]) }}">Fotos({{count($item->galeries)}})</a></td>
                                        <td>{{$item->status}}</td>
                                        <td>{{date('d/m/Y', strtotime($item->created_at))}}</td>
                                        <td>
                                            <a href="{{ route('product.edit', ['id'=>$item->id]) }}" title="Editar"><i
                                                    class="fa fa-edit"></i></a>
                                            <a href="{{ route('product.delete', ['id'=>$item->id]) }}"
                                                title="Deletar"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center">Nenhum registro encontrado.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-12">
                                    {{$data->links()}}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
@endsection
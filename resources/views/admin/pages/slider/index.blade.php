@extends('admin.layouts.app' ,['activePage' => 'slider.index'])
@section('title', 'Slider')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row" style="padding-top: 15px">
                <div class="col-md-12">@include('admin.includes.alerts')</div>
            </div>

            <div class="row" style="margin-bottom: 15px;">
                <div class="col-md-12">
                    <a href="{{ route('slider.create') }}" class="btn btn-default">Cadastrar</a>
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
                                        <th>DEPARTAMENTO</th>
                                        <th>STATUS</th>
                                        <th>DATA</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $slider)
                                    <tr>
                                        <td>
                                            <img src="{{ url("storage/sliders/{$slider->image_url}") }}" width="100" alt="">
                                        </td>
                                        <td>{{$slider->department->name}}</td>
                                        <td>{{$slider->status}}</td>
                                        <td>{{date('d/m/Y', strtotime($slider->created_at))}}</td>
                                        <td>
                                            <a href="{{ route('slider.edit', ['id'=>$slider->id]) }}" title="Editar"><i
                                                    class="fa fa-edit"></i></a>
                                            <a href="{{ route('slider.delete', ['id'=>$slider->id]) }}"
                                                title="Deletar"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Nenhum registro encontrado.</td>
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
@extends('admin.layouts.app' ,['activePage' => 'product.index'])
@section('title', 'Galeria')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row" style="padding-top: 15px">
                <div class="col-md-12">@include('admin.includes.alerts')</div>
            </div>

            <div class="row" style="margin-bottom: 15px;">
                <div class="col-md-12">
                    <button data-toggle="modal" data-target="#galeryFormModal"
                        class="btn btn-default">Cadastrar</button>
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
                                        <th>DATA</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $image)
                                    <tr>
                                        <td>
                                            <img src="{{ url("storage/products/{$image->image}") }}"
                                            width="100" alt="">
                                        </td>
                                        <td>{{date('d/m/Y', strtotime($image->created_at))}}</td>
                                        <td>
                                            <a href="{{ route('product.galery.delete', ['id'=>$image->id]) }}"
                                                title="Deletar"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3" class="text-center">Nenhum registro encontrado.</td>
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

<!-- Modal -->
<div class="modal fade" id="galeryFormModal" tabindex="-1" role="dialog" aria-labelledby="galeryFormModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="galeryFormModal">Adicionar imagem</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('product.galery.store') }}" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @include('admin.pages.product.galery.forms.form')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
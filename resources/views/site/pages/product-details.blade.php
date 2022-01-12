@extends('site.layouts-2.app')
@section('title', $data->name)

@section('content')
<!--=====================
    Breadcrumb Aera Start
    =========================-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li>
                            <h1><a href="{{ route('site.index') }}">Home</a></h1>
                        </li>
                        <li>
                            <h1><a href="{{ route('site.product') }}">Produtos</a></h1>
                        </li>
                        <li>Produto Detalhes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====================
    Breadcrumb Aera End
    =========================-->
@endsection
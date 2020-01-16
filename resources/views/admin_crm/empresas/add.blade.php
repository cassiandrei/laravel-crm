@extends('layouts.site')

@section('title','Adicionar Empresas')

@section('content')
    <div class="container">
        <h3 class="center">Adicionar Empresa</h3>
        <div class="row">
            <form action="{{route('empresas.add')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('admin_crm.empresas._form')
                <button class="btn deep-orange" type="submit">Salvar</button>
            </form>
        </div>
    </div>


@endsection

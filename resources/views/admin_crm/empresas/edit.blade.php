@extends('layouts.site')

@section('title','Editar Empresa')

@section('content')
    <div class="container">
        <h3 class="center">Editar Empresa</h3>
        <div class="row">
            <form action="{{route('empresas.update', $registro->id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                @include('admin_crm.empresas._form')
                <button class="btn deep-orange" type="submit">Salvar</button>
            </form>
        </div>
    </div>


@endsection

@extends('layouts.site')

@section('title','Editar Empresa')

@section('content')
    <div class="container">
        <h3 class="center">Editar Empregado</h3>
        <div class="row">
            <form action="{{route('empregados.update', $registro->id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                @include('admin_crm.empregados._form')
                <button class="btn deep-orange" type="submit">Salvar</button>
            </form>
        </div>
    </div>


@endsection

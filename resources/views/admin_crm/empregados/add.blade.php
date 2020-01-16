@extends('layouts.site')

@section('title','Adicionar Empresas')

@section('content')
    <div class="container">
        <h3 class="center">Adicionar Empregado</h3>
        <div class="row">
            <form action="{{route('empregados.add')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('admin_crm.empregados._form')
                <button class="btn deep-orange" type="submit">Salvar</button>
            </form>
        </div>
    </div>


@endsection

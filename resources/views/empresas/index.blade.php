@extends('layout.site')

@section('title','Lista de Empresas')

@section('content')
    <h4>Lista de empresas</h4>

    @foreach($lista as $item)
        <p>{{  $item["nome"] }} tel: {{ $item["tel"] }}</p>
    @endforeach
@endsection



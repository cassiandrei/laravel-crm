@extends('layouts.site')

@section('title','Lista de Empresas')

@section('content')
    <div class="container">
        <h3 class="center">Lista de empresas</h3>
        <div class="row">
            <table>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Logo</th>
                    <th>Website</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lista as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->nome }}</td>
                        <td>{{ $registro->email }}</td>
                        <td><img height="60" width="60" src="{{asset($registro->logo)}}" alt="{{ $registro->nome }}"/></td>
                        <td>{{ $registro->website }}</td>
                        <td>
                            <a class="btn deep-orange" href="{{ route('empresas.edit',$registro->id) }}">Editar</a>
                            <a class="btn red" href="{{ route('empresas.delete',$registro->id) }}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            {{$lista->links()}}
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('empresas.add') }}">Adicionar</a>

        </div>
    </div>
@endsection

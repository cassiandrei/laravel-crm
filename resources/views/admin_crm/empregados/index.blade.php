@extends('layouts.site')

@section('title','Lista de Empregados')

@section('content')
    <div class="container">
        <h3 class="center">Lista de Empregados</h3>
        <div class="row">
            <table>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>email</th>
                    <th>Telefone</th>
                    <th>Empresa</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lista as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->first_name }} {{ $registro->last_name }}</td>
                        <td>{{ $registro->email }}</td>
                        <td>{{ $registro->tel }}</td>
                        <td>{{$registro->empresa_id}}</td>
                        <td>
                            <a class="btn deep-orange" href="{{ route('empregados.edit',$registro->id) }}">Editar</a>
                            <a class="btn red" href="{{ route('empregados.delete',$registro->id) }}">Deletar</a>
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
            <a class="btn blue" href="{{ route('empregados.add') }}">Adicionar</a>

        </div>

    </div>


@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Bem vindo {{Auth::user()->name}}
                    @if(Auth::user()->isAdmin())
                            <p><a href="{{route('empresas.index')}}">Entrar no Admin</a></p>
                        @else
                           <p>Você não é Administrador</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

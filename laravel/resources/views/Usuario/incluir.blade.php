@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="app-title">
            <h1>    
                <i class="fa fa-edit">Cadastro de Usuario</i>
            </h1>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-search fa-lg"></i></li><!--insere uma lupa -->
                <li class="breadcrumb-item">Pesquisa</li>
            </ul>
        </div>
    </div>
    <div class="tile">
        <div class="tile-body">
            <form action="{{ url('/usuario/salvar')}}" method="POST">
                @csrf
                @include('usuario.__form')
                <div class="center">
                    <button type="submit" class="btn btn-primary btn-lg"> Salvar Dados do Usuario </button>
                    <a class="btn btn-secundary btn-lg" href="{{url('/usuario/cancelar')}}">Cancelar Cadastro do Usuario</a>
                </div>
            </form>
        </div>
    </div>


@endsection

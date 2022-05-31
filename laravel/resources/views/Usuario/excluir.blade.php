@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="app-title">
            <h1>
                <i class="fa fa-edit">Cadastro de Usuario</i>
            </h1>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-search fa-lg"></i></li>
                <li class="breadcrumb-item">Pesquisa</li>

            </ul>
        </div>
    </div>
    <div class="tile">
        <div class="tile-body">
            <form action="{{url('/usuario/excluir', $registro->id)}}" method="POST">
                @csrf
                @include('usuario.__form')
                <div class="center">
                    <button type="submit" class="btn btn-danger btn-lg" >Excluir Dados do Usuario</button>
                    <a class="btn btn-secondary btn-lg" href="{{ url('/usuario/cancelar') }}">Cancelar exclusão do usuario</a>
                </div>
            </form>
        </div>
    </div>




@endsection
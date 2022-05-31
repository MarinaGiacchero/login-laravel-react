@extends('layouts.app')
@section('content')
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
    <div class="container">
        <div class="app-title">
          <h1>
            <i class="fa fa-edit">Lista Usuario</i>
          </h1>
          <ul class="app-breadcumb breadcrumb">
            <li class="breadcumb-item"><i class="fa fa-search fa-lg"></i></li>
            <li class="breadcumb-item"><a href="">Menu Principal</li>
          </ul>
        </div>
        <div class="container">
            <div class="tile">
                <div class="tile-body"> 
                    <form>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-control col-sm-1" >Nome:</label>    
                                <input class="form-control col-sm-9"placeholder="Informe um Nome:"/>
                                <div class=col-sm-2>
                                    <button type="submit" class="btn btn-primary">
                                        Pesquisar<i class="fa fa-search-plus"> </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="no-more-tables">  
            <table class="table table-striped table-bordered table-over cf">
                <thead class="cf">
                    <tr style="font-weight:bold; text-align:center">
                        <th>ID</th>
                        <th>NOME</th>
                        <th>E-MAIL</th>
                        <th>PASSWORD</th>
                        <th>RG</th>
                        <th>CPF</th>
                        <th>NACIONALIDADE</th>
                        <th>ESTADO_CIVIL</th>
                        <th>AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dados as $dado)
                    <tr style="text-align:center">
                        <td data-title="ID" >{{$dado->id}}</td>
                        <td data-title="Nome" >{{$dado->nome}}</td>
                        <td data-title="Email" >{{$dado->email}}</td>
                        <td data-title="Password" >{{$dado->password}}</td>
                        <td data-title="RG" >{{$dado->rg}}</td>
                        <td data-title="CPF" >{{$dado->cpf}}</td>
                        <td data-title="Nacionalidade" >{{$dado->nacionalidade}}</td>
                        <td data-title="Estado Civil" >{{$dado->estado_civil}}</td>

                        <td>
                            <a class="btn btn-info  btn-sm" href="{{url('/usuario/alterar',$dado->id)}}">
                                <i class= "fa fa-pencil"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{url('/usuario/excluir',$dado->id)}}">
                                <i class= "fa fa-trash"></i>
                            </a>
                    </tr>
                    @endforeach                
                </tbody>
            </table>
            
            <a class="btn btn-sucess btn-lg" href="{{('/usuario/incluir')}}">
                Incluir novo Usuario<i class="fa fa-plus-cicle"></i>
            </a>
        </div>
    </div>
@endsection

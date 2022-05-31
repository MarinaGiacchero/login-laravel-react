<?php

namespace App\Services;
use App\Models\Usuario;
use Carbon\Carbon;

use function PHPSTORM_META\registerArgumentsSet;

class UsuarioService{

    private $repository;

    public function __construct(Usuario $usuario)
    {
        $this->repository = $usuario;
    }

    public function index(){
        $dados = $this->repository->all();
        return([
            'dados'=>$dados
        ]);
    }

    public function create($data){
      //  $data['data_nasc'] = Carbon::createFromFormat('d/m/Y',$data['data_cadastro'])->format(('Y-m-d'));
        $this->repository->create($data);
        return(['sucess'=>'Registro Cadastrado com Sucesso!']);
    }

    public function update(){

    }

    public function delete($id){
        $registro = $this->repository->find($id);
        return (['registro' => $registro,]);
    }

    public function excluir($id){
        $registro = $this->repository->find($id);
        $registro->delete();
    }

    public function show($id){
        $registro = $this->repository->find($id);
        return (['registro' => $registro,]);
    }
    public function store($data, $id){
        $registro = $this->repository->find($id);
        $registro->update($data);
        return(['sucess'=>'Registro Alterado com Sucesso!']);
    }
}
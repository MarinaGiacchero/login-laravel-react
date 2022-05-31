<?php

namespace App\Http\Controllers;

use App\Services\UsuarioService;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    private $usuarioService;


    public function __construct(UsuarioService $usuarioService)
    {
        $this->usuarioService = $usuarioService;
    }

    public function index(){
        $dados = $this-> usuarioService->index();

        return view('usuario.index', [
            'dados'=>$dados['dados']
        ]);
    }

    public function create(Request $request){
        $data = $request->all();
        $mensagem=$this->usuarioService->create($data);
        return([
            'sucess'=>$mensagem['sucess'],
            view('usuario.index'),  
        ]);
    }

    public function update(){

    }

    public function cancelar(){
       return redirect()->route('usuario.listar');
   }

    public function show($id){
        $registro = $this->usuarioService->show($id);
        return view('usuario.alterar',['registro'=>$registro['registro']]);
    }

    public function delete($id){
        $registro = $this->usuarioService->delete($id);
        return view('usuario.excluir',['registro'=>$registro['registro']]);
    }

    public function excluir($id){
        $registro = $this->usuarioService->excluir($id);
        return redirect()->route('usuario.listar');
    }

    public function store(Request $request, $id){
        $data = $request->all();
        $mensagem =  $this->usuarioService->store($data,$id);
        return redirect()->route('usuario.listar')->with('sucess',$mensagem['sucess']);
    }

    public function new(){
        return view('usuario.incluir');
    }
}

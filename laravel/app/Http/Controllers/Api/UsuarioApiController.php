<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\UsuarioService;
use App\Http\Controllers\Controller;

class UsuarioApiController extends Controller {
    
     private $usuarioService;

     public function __construct(UsuarioService $usuarioService){
          $this->usuarioService = $usuarioService;   
     }

     public function buscaPaginada(Request $request ){
          
         $page     = $request->get('page') ? $request->get('page') : 1;  
         $pageSize = $request->get('pageSize') ? $request->get('pageSize') : 5;
         $dir      = $request->get('dir') ? $request->get('dir') : 'asc';
         $props    = $request->get('props') ? $request->get('props') : 'id';
         $search   = $request->get('nome') ? $request->get('nome') : "";    
         
         $dados = $this->UsuarioService->buscaPaginada($page,$pageSize, $dir, $props, $search);
         return response()->json($dados);
     } 
  
             
       public function create(Request $request){
          $data = $request->all();
          $mensagem = $this->usuarioService->create($data);  
          return response()->json($mensagem);
  
       }
       
       public function store(Request $request, $id){
            $data = $request->all();
            $mensagem = $this->usuarioService->store($data, $id);
            return response()->json($mensagem);
  
       }
       public function entrar(Request $request){
          $data= $request->only('email', 'password');
          $registro = $this; 
          return response()->json(compact($registro));
      }
  
       public function show($id){
         
           $registro = $this->usuarioService->show($id); 
           return response()->json($registro);
       }
  
       public function delete($id){
            $registro = $this->usuarioService->delete($id); 
            return view('usuario.excluir',[
                 'registro'=>$registro['registro'],
            ]);
        }
  
        public function excluir($id){
            $registro = $this->usuarioService->excluir($id); 
            return redirect()->route('usuario.listar');
        }
  
       
       public function cancelar(){
            return redirect()->route('usuario.listar');
       }

}

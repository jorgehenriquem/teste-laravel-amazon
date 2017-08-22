<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tipo;
use App\Imovel;


class TipoController extends Controller
{
     public function index()
    {
        $registros = Tipo::all();
        return view('admin.tipos.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.tipos.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        $registro = new Tipo();
        $registro->titulo = $dados['titulo'];

        $registro->save();

        \Session::flash('mensagem',['msg'=>'Tipo cadastrado com sucesso!', 'class'=>'green white-text']);
        return redirect()->route('admin.tipos');
        
    }

     public function editar($id)
    {
        $registro = Tipo::find($id);
        return view('admin.tipos.editar', compact('registro'));
    }

     public function atualizar(Request $request, $id)
        {
             $registro = Tipo::find($id);
             $dados = $request->all();
             $registro->titulo = $dados['titulo'];

        
        $registro ->update();

        \Session::flash('mensagem',['msg'=>'Registro alterado com sucesso!', 'class'=>'green white-text']);
        return redirect()->route('admin.tipos');
    }


    public function deletar($id)

  

    {
        if(Tipo::where('tipo_id','=',$id)->count()){
            
            $msg = "Não é possivel deletar esse tipo! Esses imoveis(";
            $tipos = Tipo::where('tipo_id','=',$id)->get();

            foreach ($tipos as $tipo){
                $msg .= "id:".$tipo->id." ";
            }
                $msg .=") estão relacionados.";

            \Session::flash('mensagem',['msg'=>$msg, 'class'=>'red white-text']);
            return redirect()->route('admin.tipos');
        }

        Tipo::find($id) ->delete();
        
        \Session::flash('mensagem',['msg'=>'Registro excluido com sucesso!', 'class'=>'green white-text']);
        return redirect()->route('admin.tipos');
    }






}

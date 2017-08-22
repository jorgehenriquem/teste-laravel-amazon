<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pagina;

class PaginaController extends Controller
{
    public function sobre()
    {
    	$pagina = Pagina::where('tipo','=','sobre')->first();

    	return view('site.sobre',compact('pagina'));
    }

     public function contato()
    {
    	$pagina = Pagina::where('tipo','=','contato')->first();

    	return view('site.contato',compact('pagina'));
    }

       public function enviarContato(Request $request) //METODO PARA ENVIAR EMAIL (ARQUIVO .ENV)
    {
    	$pagina = Pagina::where('tipo','=','contato')->first();
    	$email = $pagina->email;
    	\Mail::to('emails.contato', ['request'=>$request], function($m) use($request, $email){
    		$m->from($request['email'], $request['name']);
    		$m->replyTo($request['email'], $request['name']);
    		$m->To($email , 'Contato Site');
    		$m->subject("Contato do site");
    	});

    	\Session::flash('mensagem',['msg'=>'contato enviado com sucesso!', 'class'=>'green white-text']);
    	return redirect()->route('site.contato');

    }
    
}

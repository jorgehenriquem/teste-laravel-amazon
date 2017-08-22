<?php

use Illuminate\Database\Seeder;
use App\Pagina;

class PaginasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $existe = Pagina::where('tipo','=','sobre')->count();
        if($existe){
        	$paginaSobre = Pagina::where('tipo','=','sobre')->first();
        }else{
        	$paginaSobre = new Pagina();
        }

        $paginaSobre->titulo = "Sistema 1";
        $paginaSobre->descricao = "Descrição Sobre a Empresa";
        $paginaSobre->texto = "Texto";
        $paginaSobre->imagem = "img\ampola.jpg";
        $paginaSobre->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3076.116724655249!2d-46.76611992014042!3d-23.52747028732596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce448183a461d1%3A0x9ba94b08ff335bae!2zU8OjbyBQYXVsbywgU1A!5e0!3m2!1spt-BR!2sbr!4v1499360666574" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
        $paginaSobre->tipo = "sobre";
        $paginaSobre->save();
   
        $existe = Pagina::where('tipo','=','contato')->count();
        if($existe){
            $paginaContato = Pagina::where('tipo','=','contato')->first();
        }else{
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "Entre em contato";
        $paginaContato->descricao = "Preencha o formulario";
        $paginaContato->texto = "Contato";
        $paginaContato->imagem = "img\ampola.jpg";
        $paginaContato->email = "email";
        $paginaContato->tipo = "contato";
        $paginaContato->save();
        echo "pagina criada com sucesso";
    }
}

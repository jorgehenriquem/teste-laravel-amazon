<?php

use Illuminate\Database\Seeder;
use App\User;
class UsuariosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $usuario = new User();
       $usuario->name = "Jorge Henrique";
       $usuario->email = "jorge.henriquem@hotmail.com";
       $usuario->password = bcrypt("123dev");
       $usuario->save();


    }
}

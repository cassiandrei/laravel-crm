<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            "name"=>"Admin",
            "email"=>"admin@admin.com",
            "password"=>bcrypt("password"),
            "admin"=>true,
        ];
        if(User::where('email','=',$dados['email'])->count()){
            $usuario = User::where('email','=',$dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario alterado";
        }else{
            User::create(@$dados);
            echo "Usuario criado";
        }
    }
}

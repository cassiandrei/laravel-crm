<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class Empresas extends Controller
{
    public function index(Request $request){
        $lista = [
            ["nome"=>"Polvo louco", "tel"=>"435436"],
            ["nome"=>"Polvo louco", "tel"=>"435436"],
            ["nome"=>"Polvo louco", "tel"=>"435436"],
        ];

        $empresas = new Empresa();
        return view('empresas.index', ['lista'=>$lista]);
    }

    public function add(){
        return "add";
    }

    public function edit(){
        return "edit";
    }

    public function delete(){
        return "delete";
    }
}

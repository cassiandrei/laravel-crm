<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class Empresas extends Controller
{
    public function index(Request $request)
    {
        $lista = Empresa::paginate(10);
        return view('admin_crm.empresas.index', compact('lista'));
    }

    public function add()
    {
        return view('admin_crm.empresas.add');
    }

    public function save(Request $request)
    {

        $request->validate([
            'logo'=> 'dimensions:min_width=100,min_height=200',
            'nome'=> 'required|max:30',
            'email'=>'required',
            'website'=>'required',
        ]);

        $dados = $request->all();

        if ($request->hasFile('logo')) {
            $img = $request->file('logo');
            $dir = "img/logos/";
            $name = "logo-" . $request->post('nome') . $img->guessClientExtension();
            $img->move($dir, $name);
            $dados['logo'] = $dir . "/" . $name;
        }

        Empresa::create($dados);

        return redirect()->route('empresas.index');

    }

    public function edit($id)
    {
        $registro = Empresa::find($id);
        return view('empresas.edit', compact('registro'));
    }

    public function update(Request $request, $id)
    {
        $dados = $request->all();

        if ($request->hasFile('logo')) {
            $img = $request->file('logo');
            $dir = "img/logos/";
            $name = "logo-" . $request->post('nome').".".$img->guessClientExtension();
            $img->move($dir, $name);
            $dados['logo'] = $dir . "/" . $name;
        }

        Empresa::find($id)->update($dados);

        return redirect()->route('admin_crm.empresas.index');

    }

    public function delete($id)
    {
        Empresa::find($id)->delete();
        return redirect()->route('admin_crm.empresas.index');
    }
}

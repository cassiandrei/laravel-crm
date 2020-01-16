<?php

namespace App\Http\Controllers;

use App\Empregado;
use App\Empresa;
use Illuminate\Http\Request;

class Empregados extends Controller
{
    public function index(Request $request)
    {
        $lista = Empregado::paginate(10);
        return view('admin_crm.empregados.index', compact('lista'));
    }

    public function add()
    {
        $empresas = Empresa::all();
        return view('admin_crm.empregados.add', compact('empresas'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',
            'email' => 'required',
            'tel' => 'required',
        ]);

        $dados = $request->all();
        Empregado::create($dados);
        return redirect()->route('empregados.index');

    }

    public function edit(Request $request, $id)
    {
        $empresas = Empresa::all();
        $registro = Empregado::find($id);
        return view('admin_crm.empregados.edit', compact('registro', 'empresas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',
            'email' => 'required',
            'tel' => 'required',
        ]);
        $dados = $request->all();
        Empregado::find($id)->update($dados);
        return redirect()->route('empregados.index');

    }

    public function delete($id)
    {
        Empregado::find($id)->delete();
        return redirect()->route('empregados.index');
    }
}

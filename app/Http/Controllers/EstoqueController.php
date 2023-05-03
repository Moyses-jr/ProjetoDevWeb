<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstoqueRequest;
use App\Models\Estoque;


class EstoqueController extends Controller
{
    public function index()
    {
        $lista = Estoque::all();

        return view('estoque.index', [
            'lista' => $lista,
        ]);
    }

    public function adicionar()
    {
        return view('estoque.adicionar');
    }

    public function adicionaGravar(EstoqueRequest $form)
    {
        $dados = $form->validated();
        Estoque::create($dados);
        return redirect('estoque');
    }

    public function editarGravar(EstoqueRequest $form)
    {
        $dados = $form->validated();
        $estoque = Estoque::find($dados['id']);
        $estoque->fill($dados);
        $estoque->save();
        return redirect('estoque');
        
    }

    public function editar(Estoque $estoque)
    {
        return view('estoque.adicionar', ['editar' => $estoque,]);
    }
}

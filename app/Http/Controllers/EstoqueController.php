<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstoqueRequest;
use App\Models\Estoque;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function index()
    {
        $lista = Estoque::orderBy('id', 'asc')->get();

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

        return redirect('estoque')->with('sucesso', 'Item alterado com sucesso.');
        
    }

    public function editar(Estoque $estoque)
    {
        return view('estoque.adicionar', ['editar' => $estoque,]);
    }

    public function apagar(Estoque $estoque)
    {
        // dd(request()->isMethod('delete'));
        if (request()->isMethod('delete')) {
            // dd(request('estoque'));
            // dd('Estaria apagando de verdade');
            $estoque->delete();
            return redirect('estoque')->with('sucesso', 'Item apagado com sucesso.');

        }

        return view('estoque.apagar', [
            'estoque' => $estoque,
        ]);
        
    }

    public function busca(Request $form)
    {
        $busca = $form->busca;
        $lista = Estoque::where('nome', 'LIKE', "%{$busca}%")->get();
       

        return view('estoque.index', [
            'lista' => $lista,
        ]);
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProdutoController;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function novo(){
        return view('produtos.novo');
    }

    public function store(Request $request){
        $data = $request->validate([
            'nome' => 'required',
            'preco_compra' => 'required|decimal:2',
            'preco_venda' => 'required|decimal:2',
        ]);

        $novoProduto = Produto::create($data);
        return redirect(route('produtos.index'));
    }

    public function editar(Produto $produto){
        return view('produtos.editar', ['produto' => $produto]);
    }
 
    public function update(Produto $produto, Request $request){
        $data = $request->validate([
            'nome' => 'required',
            'preco_compra' => 'required|decimal:2',
            'preco_venda' => 'required|decimal:2',
        ]);

        $produto->update($data);
        return redirect(route('produtos.index'))->with('success', 'Produto Atualizado');
    }

    public function deletar(Produto $produto){
        $produto->delete();
        return redirect(route('produtos.index'))->with('success', 'Produto Deletado');
    }
}

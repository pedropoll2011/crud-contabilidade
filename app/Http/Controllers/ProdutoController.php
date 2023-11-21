<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProdutoController;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index(){
        return view('produtos.index');
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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;
use App\Produto;

class ProdutoController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Produto::get();
        return view('produtos.index', array('items' => $items));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoRequest $request)
    {
        //
        //
        $produto = array(
            'nome_produto'    => $request->nome_produto,
            'codigo'   => $request->codigo, 
            'avatar'   => $request->avatar,
          ); 

        //Herdado Classe do MODEL produto
        $novoproduto = new Produto();
        $novoproduto->nome_produto = $produto['nome_produto'];
        $novoproduto->codigo = $produto['codigo'];
        $novoproduto->avatar = $produto['avatar'];




        if ($request->hasFile('avatar') && $request->file('avatar')->isValid())
        {

            $avatarName = $novoproduto->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

            $novoproduto->avatar = $request->avatar->storeAs('produtos',$avatarName);
        }

 

        //Registra no banco de dados
        $novoproduto->save();


        return redirect()
        ->route('produtos.index')
        ->with('success', 'Produto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
        return view('produtos.show', array('verproduto' => $produto));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
        return view('produtos.edit', array('editproduto' => $produto));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
        $produto->nome_produto = $request->nome_produto;
        $produto->codigo = $request->codigo;
        

        $produto->save();
    
        return redirect()
          ->route('produtos.index')
          ->with('success', 'Produto alterado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Produto $produto)
    {
        //
        $produto->delete();

        return redirect()
          ->route('produtos.index')
          ->with('success', 'Produto deletado com sucesso!');

    }
}

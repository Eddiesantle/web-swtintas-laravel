<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\ClientesRequest;
use App\Cliente;
use App\Produto;

class ClienteController extends Controller
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
        $items = Cliente::get();
        return view('clientes.index', array('items' => $items));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $produtos = Produto::pluck('nome_produto', 'id');

    return view('clientes.create', array('produtos' => $produtos));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientesRequest $request)
    {
        //
        $cliente = array(
            'nome'    => $request->contact_name,
            'email'   => $request->contact_email,
            'tell'   => $request->contact_tell,   
          ); 

        //Herdado Classe do MODEL Cliente
        $novocliente = new Cliente();
        $novocliente->name = $cliente['nome'];
        $novocliente->email = $cliente['email'];
        $novocliente->telefone = $cliente['tell'];

        //Registra no banco de dados
        $novocliente->save();


        return redirect()
        ->route('clientes.index')
        ->with('success', 'Cliente cadastrado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
 
        return view('clientes.show', array('vercliente' => $cliente));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
        

    return view('clientes.edit', array('editcliente' => $cliente));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
        //$this->validator($request);

    $cliente->name = $request->name;
    $cliente->email = $request->email;
    $cliente->telefone = $request->telefone;


    $cliente->save();

    return redirect()
      ->route('clientes.index')
      ->with('success', 'Cliente alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
        $cliente->delete();

    return redirect()
      ->route('clientes.index')
      ->with('success', 'Cliente deletado com sucesso!');
    }
}

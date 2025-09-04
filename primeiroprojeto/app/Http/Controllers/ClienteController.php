<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente; //importei a model Cliente criada antes
use Illuminate\Support\Facades\Log; //importei o Log para registrar erros

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all(); //recupera todos os clientes do banco de dados
        return view('clientes.index', compact('clientes')); //retorna a view com todos os clientes
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create'); //retorna a view para criar um novo cliente
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Cliente::create($request->all()); //cria um novo cliente com os dados do request
            return redirect()->route('clientes.index')->with('sucesso', 'Registro inserido!');
        } catch (\Exception $e) {
            Log::error('Erro ao salvar o registro do cliente!' . $e->getMessage(), ['trace' => $e->getTraceAsString(), 'request' => $request->all]);
            return redirect()->route('clientes.index')->with('erro', 'Erro ao inserir!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

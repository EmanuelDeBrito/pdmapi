<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Pegando todos os produtos do banco de dados
        return Produto::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Cadastrar um Produto no banco de dados
        $produto = Produto::create($request->all());
        return $produto;
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        // Retornando um Produto específico - Laravel busca automaticamente
        return $produto;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        // Atualizando um Produto do banco de dados
        $produto->update($request->all());
        return $produto;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        // Removendo um Produto do banco de dados
        $produto->delete();
        return $produto;
    }
}

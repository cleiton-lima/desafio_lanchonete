<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = $this->produto->all();
        return $produtos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = $this->produto->create($request->all());
        return $produto;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = $this->produto->find($id);
        if($produto === null){
            return ['msg' => 'Recurso pesquisado não existe'];
        }
        return $produto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $id)
    {
        $protudo = $this->produto->find($id);

        if($protudo === null){
            return ['erro' => 'Impossivel realizar a atualizacao. O recurso pesquisado não existe'];
        }

        $produto->update($request->all());
        return $produto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $id)
    {
        $produto = $this->produto->find($id);

        if($produto === null){
            return ['erro' => 'Impossivel realizar a exclusao. O recurso pesquisado não existe'];
        }

        $produto->delete();
        return ['msg' => 'O produto foi removido com sucesso!'];
    }
}

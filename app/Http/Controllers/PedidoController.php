<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedido = $this->pedido->all();
        return $pedido;
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
        $pedido = $this->pedido->create($request->all());
        return $pedido;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedido = $this->pedido->find($id);
        if($pedido === null){
            return ['msg' => 'Recurso pesquisado não existe'];
        }
        return $pedido;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
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
    public function update(Request $request, Pedido $id)
    {
        $pedido = $this->pedido->find($id);

        if($pedido === null){
            return ['erro' => 'Impossivel realizar a atualizacao. O recurso pesquisado não existe'];
        }

        $pedido->update($request->all());
        return $pedido;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $id)
    {

        $pedido = $this->pedido->find($id);

        if($pedido === null){
            return ['erro' => 'Impossivel realizar a exclusao. O recurso pesquisado não existe'];
        }

        $pedido->delete();
        return ['msg' => 'O Pedido foi removido com sucesso!'];
    }
}

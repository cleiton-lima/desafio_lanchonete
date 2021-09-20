<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['id_cliente', 'id_produto', 'data_criacao', 'status_pedido'];

    protected function rules() {
        return [
            'id_cliente' => 'exists:clientes,id',
            'id_produto' => 'exists:produtos,id',
            'data_criacao' => 'required',
            'status_pedido' => 'required'
        ];
    }

    public function clintes() {
        return $this->hasMany('App\Models\Cliente');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'telefone', 'endereco'];

    protected function rules() {
        return [
            'nome' => 'required|min:3',
            'email' => 'required|email|unique',
            'telefone' => 'required|numeric|phone_number|size:11',
            'endereco' => 'required'
        ];
    }

    public function pedido() {
        return $this->belongsTo('App\Models\Pedido');
    }
}

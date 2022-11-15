<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    public function Ciudad(){
        return $this->belongsTo(Ciudad::class);
    }
    public function Pedido(){
        return $this->hasMany(Pedido::class);
    }
}

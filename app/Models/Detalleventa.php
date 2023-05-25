<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalleventa extends Model
{
    use HasFactory;
    protected $fillable =['fecha','costofinal' ,'nombre','cantidad','costoProducto','id_productos','id_clientes',];

    public function Productos(){
        return $this->belongsToMany(Producto::class,'detalleventas:producto');
    }
    public function Clientes(){
        return $this->belongsToMany(Cliente::class,'detalleventas:cliente');
    }
  
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable =['nombre','descripcion' ,'estado','precio','stock','imagen','id_categorias','id_decuentos'];
    
    public function Categorias(){
        return $this->belongsToMany(Categoria::class,'producto:categoria');
    }
    public function Descuentos(){
        return $this->belongsToMany(Descuento::class,'producto:descuento');
    }
}

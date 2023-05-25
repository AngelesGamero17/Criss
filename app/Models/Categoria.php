<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nombCategoria'];
    
    public function Productos(){
        return $this->belongsToMany(Producto::class, 'id');
    }

}

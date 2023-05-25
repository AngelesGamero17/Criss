<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable =['nombre','apellido' ,'celular','direccion','dni','correo'];
    //Relationships Many to Many
    public function DetalleVentas(){
        return $this->belongsToMany(DetalleVenta::class, 'id');
    }

}

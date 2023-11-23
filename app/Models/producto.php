<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable =
    ['codigo','nombre_producto','cantidad','precio','descripcion']; 

    public function ventas()
    {
        return $this->belongsToMany(Ventas::class, 'detalle_venta', 'id_producto', 'id_venta')
        ->withPivot('cantidad', 'precio_unitario', 'total_producto');
 }

}

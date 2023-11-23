<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['fecha_venta','total'];

    public function productos()
    {
        return $this->belongsToMany(Productos::class, 'detalle_venta', 'id_venta', 'id_producto')
        ->withPivot('cantidad', 'precio_unitario', 'total_producto');
    }
}
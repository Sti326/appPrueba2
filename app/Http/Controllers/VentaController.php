<?php

use Illuminate\Http\Request;
use App\Models\Ventas;
use App\Models\Productos;
use App\Models\DetalleVenta;
use Illuminate\Support\Facades\Redirect;
class VentaController extends Controller
{
    
    public function index()
    {
        
        return view('ventas.index');
    }

    public function tablaVentas()
    {
       $ventas = ventas::all();
        
        return view('ventas.tabla', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $productos = Productos::all();
        return view('ventas.create', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
        //$price = $request->precio;
        //dd($price);
        $venta = Ventas::create(['fecha_venta' => now()->format('Y-m-d'), 'total' => 0]);
    
        //dd($venta);
        foreach ($request->productos as $codigo => $producto) {
            $productoModel = Productos::where('codigo', $codigo)->first();
            //dd($productoModel);
            //dd($producto['cantidad']);
    
            if ($productoModel) {
                $subtotal = $productoModel->precio * $producto['cantidad'];
                //dd($subtotal);
                $venta->productos()->attach($productoModel->id, ['cantidad' => $producto['cantidad']]);
                //dd($venta->productos()->attach($productoModel->id, ['cantidad' => $producto['cantidad']]));
    
                // Actualizar el total de la venta
                $venta->total += $subtotal;
             
                    }
                }
            
     $venta->save();
    return redirect()->route('ventas.index');
 }
    
        // Guardar el total actualizado y redirigir

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}



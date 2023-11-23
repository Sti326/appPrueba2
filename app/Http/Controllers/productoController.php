<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use Illuminate\Support\Facades\Redirect;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto=producto::orderBy('id','ASC')->paginate(10);
        return view('producto.index',compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto=new producto;
        $producto->codigo=$request->get('codigo');
        $producto->nombre_producto=$request->get('nombre_producto');
        $producto->cantidad=$request->get('cantidad');
        $producto->precio=$request->get('precio');
        $producto->descripcion=$request->get('descripcion');
        $producto->save();

        return Redirect::to('producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto=producto::find($id);
        return view('producto.modal',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto=producto::findOrFail($id);
        return view("producto.edit",["producto"=>$producto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto=producto::findOrFail($id);
        $producto->codigo=$request->get('codigo');
        $producto->nombre_producto=$request->get('nombre_producto');
        $producto->cantidad=$request->get('cantidad');
        $producto->precio=$request->get('precio');
        $producto->update();
        return Redirect::to('producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto=producto::findOrFail($id);
        $producto->delete();
        return Redirect::to('producto');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleado;
use Illuminate\Support\Facades\Redirect;

class empleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleado=empleado::orderBy('id','ASC')->paginate(10);
        return view('empleado.index',compact('empleado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado=new empleado;
        $empleado->documento_identidad=$request->get('documento_identidad');
        $empleado->nombre=$request->get('nombre');
        $empleado->apellido=$request->get('apellido');
        $empleado->edad=$request->get('edad');
        $empleado->direccion=$request->get('direccion');
        $empleado->email=$request->get('email');
        $empleado->telefono=$request->get('telefono');
        $empleado->save();

        return Redirect::to('empleado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $empleado=empleado::find($id);
        return view('empleado.modal',compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado=empleado::findOrFail($id);
        return view("empleado.edit",["empleado"=>$empleado]);
    
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
        $empleado=empleado::findOrFail($id);
        $empleado->documento_identidad=$request->get('documento_identidad');
        $empleado->nombre=$request->get('nombre');
        $empleado->apellido=$request->get('apellido');
        $empleado->edad=$request->get('edad');
        $empleado->direccion=$request->get('direccion');
        $empleado->email=$request->get('email');
        $empleado->telefono=$request->get('telefono');
        $empleado->update();
        return Redirect::to('empleado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado=empleado::findOrFail($id);
        $empleado->delete();
        return Redirect::to('empleado');
    }
}

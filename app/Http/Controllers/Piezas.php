<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pieza;

class Piezas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d = piezas::all();
        return view('Vistas.muestraPiezas')->with('datos',$d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Vistas.creaPieza');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dato = new pieza;
        $dato->nombre = $request->nombre;
        $dato->descripcion = $request->descripcion;
        $dato->no_piezas = $request->no_piezas;
        $dato->costo_pieza = $request->costo_pieza;
        $dato->save();
        return redirect('/piezas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // SIN UTILIZAR
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato = piezas::find($id);
        return view('Vistas.editaPieza')->with('dato',$dato);
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
        $dato = piezas::find($id);
        if(!is_null($dato))
        {
            $dato->nombre = $request->nombre;
            $dato->descripcion = $request->descripcion;
            $dato->no_piezas = $request->no_piezas;
            $dato->costo_pieza = $request->costo_pieza;
            $dato->save();
        }
        return redirect('/piezas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dato = piezas::find($id);
        $dato->delete();
        return redirect('/piezas');
    }
}

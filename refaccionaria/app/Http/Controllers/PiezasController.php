<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pieza;

class PiezasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p = Pieza::all();
        return view('piezas')->with('piezas', $p);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p = new Pieza;
        $p->nombre = $request->nombre;
        $p->descripcion = $request->descripcion;
        $p->numero_piezas = $request->n_piezas;
        $p->costo_pieza = $request->c_pieza;
        $p->created_at = now();
        $p->updated_at = null;
        $p->save();

        return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pieza = Pieza::find($id);
        $p = Pieza::all();
        if(!is_null($pieza)){
            return view('piezas_update')
                ->with('pieza', $pieza)
                ->with('piezas',$p);
        }

        return redirect('index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $p = Pieza::find($request->id);
        if(is_null($p)){
            return redirect('index');
        }

        $p->nombre = $request->nombre;
        $p->descripcion = $request->descripcion;
        $p->numero_piezas = $request->n_piezas;
        $p->costo_pieza = $request->c_pieza;
        $p->updated_at = now();
        $p->save();

        return redirect('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Pieza::find($id);
        $p->delete();

        return redirect('index');
    }
}

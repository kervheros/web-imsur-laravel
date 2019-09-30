<?php

namespace IMSUR\Http\Controllers;

use Illuminate\Http\Request;

use IMSUR\Http\Requests;
use IMSUR\Http\Controllers\Controller;

use Auth;
use View;

class LiquidacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function principal(Request $request)
    {
      $cod_proveed=Auth::user()->cod_prov;
      $cod_liquidacion=$request->get('cod_liquidacion');
      $datos_liquido=\IMSUR\liquidacion::orderby('cod_liquidacion','DESC')
                    ->proveer($cod_proveed)
                    ->liquidacion($cod_liquidacion)
                    ->paginate(6);
      return view('liquidaciones.pago_liquidacion', compact('datos_liquido'));
    }

    public function mostrar($cod_liquidacion)
    {
      $code_liq = \IMSUR\liquidacion::where('cod_liquidacion', $cod_liquidacion)->firstOrFail();
      return \View::make('liquidaciones.show')->with('code_liq',$code_liq);
      
    }



    public function index()
    {
        //
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

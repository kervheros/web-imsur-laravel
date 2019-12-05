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
      /** estado de carga dentro de liquidaciones
      $stado = \IMSUR\stado_carga::orderBy('cod_liquidacion','DESC')
                    ->nom($cod_proveed)
                    ->paginate(6); */   //esta linea esencial par q muestra tabla con contenido sino no muestra

      $datos_liquido=\IMSUR\liquidacion::orderby('cod_liquidacion','DESC')
                    ->proveer($cod_proveed)
                    ->liquidacion($cod_liquidacion)
                    ->paginate(6);
      /** parte de stado de cargas  para visualizar en vista liquidaciones
      return view('liquidaciones.pago_liquidacion', compact('datos_liquido'),compact('stado')); */
      return view('liquidaciones.pago_liquidacion', compact('datos_liquido'));
    }

    public function mostrar($cod_liquidacion)
    {
      //$code_liq=\IMSUR\liquidacion::where('cod_liquidacion', $cod_liquidacion)->firstOrFail();  sirve para busquedas individuales sin nececidad de foreach
      $code_liq = \IMSUR\liquidacion::where('cod_liquidacion', $cod_liquidacion)->get(); //recupera tb datos pero mas para tablas con foreach tb sirve para individuales
      $code_reten = \IMSUR\retencion::where('cod_liquidacion', $cod_liquidacion)->get(); //visualizador de retenciones desde tabla induvidual

      return \View::make('liquidaciones.show')
                  ->with('code_liq',$code_liq)
                  ->with('code_reten',$code_reten);   //visualizador de retenviones
                  //->with('nuevo_',$nuevo_);
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

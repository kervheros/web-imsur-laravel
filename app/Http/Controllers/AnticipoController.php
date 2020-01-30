<?php

namespace IMSUR\Http\Controllers;

use Illuminate\Http\Request;

use IMSUR\Http\Requests;
use IMSUR\Http\Controllers\Controller;

use NumeroALetras\NumeroALetras;

use Auth;
use View;

class AnticipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $cod_proveed = Auth::user()->cod_prov;  //guardamos en una variable el cod_proveedor del proveedor q se haya logeado

      $cod_liquidacion = $request->get('cod_liqui');

  /**
      $datos_anticipo=\IMSUR\anticipo::orderby('cod_liquidacion','DESC')
                        ->proveer($cod_proveed)

                        ->liquidacion($cod_liquidacion)
                        ->paginate(6);

       return view ('anticipos.pago_anticipo',compact('datos_anticipo')); */

       $datos_anticipo=\IMSUR\Liquidaciones::with(['pago_a','usuario_l','proveedor_p','persona_p'])
                        ->proveer($cod_proveed)
                        ->liquidacion($cod_liquidacion)
                        ->paginate(6);

       return view ('anticipos.pago_anticipo',compact('datos_anticipo'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
    public function show($cod_liquidacion)
    {
      //convertidor de numero a letra
      //seleccionamos con cod_liquidacion todo de un usuaario como no usaremos foreach usamos firstOrFail y no get
      $numero = \IMSUR\Liquidaciones::where('cod_liquidacion', $cod_liquidacion)->firstOrFail();
      $salida=$numero->anticipo_; //se coloca en una variable el monto q tiene ese usuario
      $conve = NumeroALetras::convertir($salida, 'Bs.'); //convertimo el monto en letras para factura solo convierte un numero en string no en int

      //contenedor con datos de usuario selecionado listo para mostrar
      $code_liq = \IMSUR\Liquidaciones::with(['pago_a','usuario_l','proveedor_p','persona_p'])->where('cod_liquidacion',$cod_liquidacion)->get();
      return \View::make('anticipos.show')->with('code_liq',$code_liq)
                                          ->with('conve', $conve);

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

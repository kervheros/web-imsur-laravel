<?php

namespace IMSUR\Http\Controllers;

use Illuminate\Http\Request;

use IMSUR\Http\Requests;
use IMSUR\Http\Controllers\Controller;
use Auth;

use View;

use NumeroALetras\NumeroALetras;
use DB;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
     {
       //serecupera en una variable cod_proveedor logeado
       $cod_proveed = Auth::user()->cod_prov;

       $cod_liquidacion = $request->get('cod_liquidacion');


/**
       //buscador con tres variables en la misma vista
       $cod_liquidacion = $request->get('cod_liquidacion');
       $transp = $request->get('transportista');
       //variable      recup valor de txtbox num_placa de view pago_trans
       $n_placa = $request->get('num_placa');
       $vista_transporte=\IMSUR\transpor::orderBy('cod_liquidacion','DESC')
                        ->liquidacion($cod_liquidacion)
                        ->transporte($transp)
                        ->placa($n_placa)
                        ->paginate(6);*/

      //  habilitar esto para las vistas
      $datos_transporte=\IMSUR\transpor::orderby('cod_liquidacion','DESC')
                        ->proveer($cod_proveed)
                        //->search($request->codigo_liqui)   box busqueda desde layout admin
                        ->liquidacion($cod_liquidacion)
                        ->paginate(6);
/**
      $datos_transporte=DB::table('liquidaciones')
                   ->join('transportista','transportista.cod_transportista','=','liquidaciones.cod_transportista')
                   ->join('proveedores','proveedores.cod_proveedor','=','liquidaciones.cod_proveedor')
                   ->join('liquidaciones_pago_transporte','liquidaciones_pago_transporte.cod_liquidacion','=','liquidaciones.cod_liquidacion')
                   ->join('persona','persona.cod_persona','=','liquidaciones_pago_transporte.cod_persona')
                   ->join('placa','placa.cod_placa','=','transportista.cod_placa')
                   ->select('proveedores.cod_proveedor','liquidaciones.cod_liquidacion','liquidaciones.trans_1','transportista.transportista','proveedores.proveedor','liquidaciones.fecha_ingreso','liquidaciones_pago_transporte.fecha_pago','persona.nombre_completo','persona.ci','placa.placa')

                   ->paginate(7);*/
       return view ('transportes.pago_transport',compact('datos_transporte'));
     }
     /*
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create(Request $request)
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

     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     //public function show($cod_liquidacion)
     public function show($cod_liquidacion)
     {

       $numero = \IMSUR\transpor::where('cod_liquidacion', $cod_liquidacion)->firstOrFail();
       $salida=$numero->trans_1;
       $conve = NumeroALetras::convertir($salida, 'Bs.');

       $code_liq = \IMSUR\transpor::where('cod_liquidacion', $cod_liquidacion)->get();
       return \View::make('transportes.show')->with('code_liq',$code_liq)
                                             ->with('conve', $conve);


       //return view ('transportes.show', compact('cod_liquidacion'));
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit()
     {
         return view('transportes.liquidacion');
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


     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function Liquidaciones(){
       return view ('transportes.liquidacion');
     }
     /*public function pag_trans(){
       return view ('facturaciones.pago_transport');
     }*/

/**
     public function verFactura($cod_liquidacion){
       $code_liq = \IMSUR\transpor::findOrFail('$cod_liquidacion');
       return view ('transportes.show')->with(compact('code_liq'));
     }*/

 }

<?php

namespace IMSUR\Http\Controllers;

use Illuminate\Http\Request;

use IMSUR\Http\Requests;
use IMSUR\Http\Controllers\Controller;
use Auth;

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


/**
       $cod_liquidacion = $request->get('cod_liquidacion');
       $transp = $request->get('transportista');
       //variable      recup valor de txtbox num_placa de view pago_trans
       $n_placa = $request->get('num_placa');
       $vista_transporte=\IMSUR\transpor::orderBy('cod_liquidacion','DESC')
                        ->liquidacion($cod_liquidacion)
                        ->transporte($transp)
                        ->placa($n_placa)
                        ->paginate(6);*/
      $vista_transporte=\IMSUR\transpor::orderby('cod_liquidacion','DESC')
                        ->proveer($cod_proveed)
                        ->paginate(6);

       return view ('facturaciones.pago_transport',compact('vista_transporte'));
     }

     /**
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
         //
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show(Request $request)
     {
       // buscador para 3 valores en la misma ventana
       $cod_liquidacion = $request->get('cod_liquidacion');
       //$transp = $request->get('transportista');
       //variable      recup valor de txtbox num_placa de view pago_trans
       //$n_placa = $request->get('num_placa');
       $vista_transporte=\IMSUR\transpor::orderBy('cod_liquidacion','DESC')
                        ->liquidacion($cod_liquidacion)
                        //->transporte($transp)
                        //->placa($n_placa)
                        ->paginate(6);

        //$vista_transporte=\IMSUR\transpor::Search($request->codigo_liqui)->orderBy('cod_liquidacion','DESC')->paginate(6);

        return view ('facturaciones.pago_transport',compact('vista_transporte'));
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit()
     {
         return view('facturaciones.liquidacion');
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
       return view ('facturaciones.liquidacion');
     }
     /*public function pag_trans(){
       return view ('facturaciones.pago_transport');
     }*/

 }

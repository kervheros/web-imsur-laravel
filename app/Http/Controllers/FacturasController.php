<?php

namespace IMSUR\Http\Controllers;

use Illuminate\Http\Request;

use IMSUR\Http\Requests;
use IMSUR\Http\Controllers\Controller;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
     {
       $cod_liquidacion = $request->get('cod_liquidacion');
       $transp = $request->get('transportista');
       $n_placa = $request->get('placa');
       $vista_transporte=\IMSUR\transpor::orderBy('cod_liquidacion','DESC')
                        ->liquidacion($cod_liquidacion)
                        ->transporte($transp)
                        ->placa($n_placa)
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


    public function invoice()
    {
        $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  \View::make('facturaciones.invoice', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
    }
 
    public function getData()
    {
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }

 }

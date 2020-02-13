<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Li_provee_leyes_mues extends Model
{
    protected $table='li_provee_leyes_mues';
    protected $primaryKey='cod_li_provee_leyes_mues';
    protected $fillable=['cod_li_provee_leyes_mues',
                         'cod_liquidacion',
                         'cod_muestrero',
                         'tipo'];

    public function leyes_l(){
      return $this->belongsTo('IMSUR\Liquidaciones','cod_liquidacion');
    }
}

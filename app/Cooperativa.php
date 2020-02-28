<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Cooperativa extends Model
{
    protected $table = 'cooperativa';
    protected $primaryKey= 'cod_cooperativa';
    protected $fillable = ['cod_cooperativa',
                           'cooperativa'];

    public function liqui_c(){
      return $this->hasMany('IMSUR\Liquidaciones','cod_cooperativa');
    }
}

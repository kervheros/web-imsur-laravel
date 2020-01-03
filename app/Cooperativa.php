<?php

namespace IMSUR;

use Illuminate\Database\Eloquent\Model;

class Cooperativa extends Model
{
    protected $table = 'cooperativa';
    protected $fillable = ['cod_cooperativa',
                           'cooperativa'];
}

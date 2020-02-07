<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directionprovinciale extends Model
{
     protected $table = 'directionprovinciale';

     public function directeurregs(){

        return $this->hasMany('App\DirecteurReg');

    }

    public function directions(){

        return $this->belongsTo('App\Academiesregionale' , 'id_academies_fk');
     }

}

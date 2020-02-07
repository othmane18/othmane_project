<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academierregionale extends Model
{
     
     protected $table = 'academiesregionale';
     
     
    public function directeurregs(){

        return $this->hasMany('App\DirecteurReg');

    }
}

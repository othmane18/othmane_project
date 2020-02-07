<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function test()
    {
        return $this->hasOne('App\Models\Test');
    }

    public function activiter()
    {
        return $this->hasOne('App\Models\Activiter');
    }


    public function etudient()
    {
        return $this->belongsTo('App\Models\Etudient');
    }
}

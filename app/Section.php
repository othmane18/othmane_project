<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function test()
    {
        return $this->hasOne('App\Models\Test');
    }

    public function activiter()
    {
        return $this->hasMany('App\Models\Activiter');
    }

    public function cours()
    {
        return $this->belongsTo('App\Models\Cours');
    }
}

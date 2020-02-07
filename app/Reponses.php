<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponses extends Model
{
    function correction()
    {

        return $this->belongsTo('App\Models\Correction');
    }

    function questions()
    {

        return $this->belongsTo('App\Models\Questions');
    }
}

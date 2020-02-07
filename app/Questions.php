<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    function reponses()
    {

        return $this->hasMany('App\Models\Reponses');
    }

    public function test()
    {

        return $this->belongsToMany('App\Models\Test', 'table_test_qestions', 'id_questions', 'id_test');
    }
}

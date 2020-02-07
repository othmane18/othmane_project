<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matieres extends Model
{

    protected $table  = "matiere";

    protected $fillable = [

        'liblle_matiere'
    ];

    public function enseignant()
    {
        return $this->hasMany('App\Enseignant');
    }

    public function cours()
    {
        return $this->hasMany('App\Cours');
    }

    public function inspecteurregionale()
    {
        return $this->hasMany('App\InspecteurReg');
    }
}

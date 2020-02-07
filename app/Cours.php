<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $guarded = [];


    public function matiere()
    {
        return $this->belongsTo('App\Models\Matiere');
    }

    public function section()
    {
        return $this->hasMany('App\Models\Section', 'id_cours_fk');
    }

    public function test()
    {
        return $this->hasMany('App\Models\Test');
    }

    public function activiter()
    {
        return $this->hasMany('App\Models\Activiter');
    }

    public function directeureg()
    {
        return $this->belongsTo('App\Models\DirecteurReg');
    }

    public function enseignant()
    {
        return $this->belongsTo('App\Models\Enseignant');
    }

    function seance()
    {
        return $this->hasMany('App\Models\Seance');
    }

    public function admin()
    {

        return $this->belongsToMany('App\Models\Admin', 'gerer', 'id_cours', 'id_admin');
    }

    public function inspecteur()
    {

        return $this->belongsToMany('App\Models\InspecteurReg', 'interagir', 'id_cours', 'id_inspecteur');
    }
}

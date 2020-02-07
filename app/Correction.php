<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Correction extends Model
{
    public function test()
    {
        return $this->hasOne('App\Models\Test');
    }

    public function activiter()
    {
        return $this->hasOne('App\Models\Activiter');
    }

    public function directeureg()
    {
        return $this->belongsTo('App\Models\DirecteurReg');
    }

    public function directeuprv()
    {
        return $this->belongsTo('App\Models\DirecteurProv');
    }

    public function enseignant()
    {
        return $this->belongsTo('App\Models\Enseignant');
    }

    function reponses()
    {

        return $this->hasMany('App\Models\Reponses');
    }

    public function etudient()
    {

        return $this->belongsToMany('App\Models\Etudiant', 'etudient_correction', 'id_correction', 'id_etudient');
    }

    public function admin()
    {

        return $this->belongsToMany('App\Models\Admins', 'gerer', 'id_correction', 'id_admin');
    }

    public function inspecteur()
    {

        return $this->belongsToMany('App\Models\InspecteurReg', 'interagir', 'id_correction', 'id_inspecteur');
    }
}

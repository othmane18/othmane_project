<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activiter extends Model
{
    public function enseignant()
    {
        return $this->belongsTo('App\Models\Enseignant');
    }

    public function cours()
    {
        return $this->belongsTo('App\Models\Cours');
    }

    function correction()
    {
        return $this->hasOne('App\Models\Correction');
    }

    public function note()
    {
        return $this->hasOne('App\Models\Note');
    }

    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    public function etudient()
    {

        return $this->belongsToMany('App\Models\Etudient', 'etudient_activiter', 'id_activiter', 'id_etudient');
    }

    public function inspecteur()
    {

        return $this->belongsToMany('App\Models\Inspecteurregionale', 'inspecteur_activiter', 'id_activiter', 'id_inspecteur');
    }
}

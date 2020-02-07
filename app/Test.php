<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
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
        return $this->hasOne('App\Models\Section');
    }

    public function enseignant()
    {

        return $this->belongsToMany('App\Models\Enseignant', 'enseignant_test', 'id_test', 'id_enseignant');
    }

    public function etudient()
    {

        return $this->belongsToMany('App\Models\Etudiant', 'etudient_test', 'id_test', 'id_etudient');
    }

    public function inspecteur()
    {

        return $this->belongsToMany('App\Models\InspecteurReg', 'inspecteur_test', 'id_test', 'id_inspecteur');
    }

    public function question()
    {

        return $this->belongsToMany('App\Models\Questions', 'table_test_qestions', 'id_test', 'id_questions');
    }
}

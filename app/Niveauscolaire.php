<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveauscolaire extends Model
{


    protected $table = 'niveau_scolaire';

    public function etudient()
    {
        return $this->hasMany('App\Etudient');
    }

    function seance()
    {

        return $this->hasMany('App\Seance');
    }

    public function enseignant()
    {

        return $this->belongsToMany('App\Enseignant', 'enseignant_niveauscolaire', 'id_niveauscolaire', 'id_enseignant');
    }

    public function filiere()
    {

        return $this->belongsToMany('App\Filiere', 'filiere_niveauscolaire', 'id_niveauscolaire', 'id_filiere');
    }
}

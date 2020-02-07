<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    public function salle()
    {
        return $this->hasOne('App\Models\Salles');
    }

    public function enseignant()
    {
        return $this->hasOne('App\Models\Enseignant');
    }

    public function etudient()
    {
        return $this->hasMany('App\Models\Etudiant');
    }

    public function inspecteurregionale()
    {
        return $this->hasOne('App\Models\InspecteurReg');
    }

    public function parent()
    {

        return $this->belongsTo('App\Models\ParentTuteur');
    }

    public function seance()
    {

        return $this->belongsToMany('App\Models\Seance', 'agenda_seance', 'id_agenda', 'id_seance');
    }
}

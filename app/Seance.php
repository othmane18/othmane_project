<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    public function cours()
    {
        return $this->belongsTo('App\Models\Cours');
    }

    public function salle()
    {
        return $this->hasMany('App\Models\Salles');
    }

    public function niveauscolaire()
    {
        return $this->belongsTo('App\Models\Niveauscolaire');
    }

    public function gestionsalle()
    {
        return $this->hasOne('App\Models\GestSalle');
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

    public function chat()
    {

        return $this->hasMany('App\Models\Chats');
    }

    public function conference()
    {

        return $this->hasOne('App\Models\Conference');
    }

    public function etudient()
    {

        return $this->belongsToMany('App\Models\Etudiant', 'etudient_seance', 'id_seance', 'id_etudient');
    }

    public function inspecteur()
    {

        return $this->belongsToMany('App\Models\InspecteurReg', 'interagir', 'id_seance', 'id_inspecteur');
    }

    public function admin()
    {

        return $this->belongsTo('App\Models\Admin');
    }

    public function agenda()
    {

        return $this->belongsToMany('App\Models\Agenda', 'agenda_seance', 'id_seance', 'id_agenda');
    }
}

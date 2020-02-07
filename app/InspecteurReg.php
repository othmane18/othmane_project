<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class InspecteurReg extends Authenticatable
{
    use Notifiable;

    protected $table = 'inspecteur_regionale';

    protected $guard = 'inspecteur_regs';

    protected $fillable = [
        'nom_inspecteur', 'email_inspecteur', 'password','prenom_inspecteur','adresse_inspecteur','telephone','id_academies_fk','id_directions_fk','id_matiere_fk','role','id_affectation_fk'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    public function aref(){

        return $this->belongsTo('App\Academierregionale' , 'id_academies_fk');

    }

    public function directions(){

        return $this->belongsTo('App\Directionprovinciale' , 'id_directions_fk');

    }


    public function directeureg()
    {
        return $this->belongsTo('App\DirecteurReg' , 'id_dirregion_fk');
    }

    public function matiere()
    {
        return $this->belongsTo('App\Matiere');
    }

    public function agenda()
    {
        return $this->hasOne('App\Agenda');
    }

    public function chat()
    {

        return $this->hasMany('App\Chats');
    }

    public function conference()
    {

        return $this->hasOne('App\Conference');
    }

    public function enseignant()
    {

        return $this->belongsToMany('App\Enseignant', 'enseignant_inspecteur', 'id_inspecteur', 'id_enseignant');
    }

    public function cours()
    {

        return $this->belongsToMany('App\Cours', 'interagir', 'id_inspecteur', 'id_cours');
    }

    public function etablissement()
    {

        return $this->belongsToMany('App\Etablissement', 'inspecteur_etablissement', 'id_inspecteur', 'id_etablissement');
    }

    public function correction()
    {

        return $this->belongsToMany('App\Correction', 'interagir', 'id_inspecteur', 'id_correction');
    }

    public function seance()
    {

        return $this->belongsToMany('App\Seance', 'interagir', 'id_inspecteur', 'id_seance');
    }

    public function test()
    {

        return $this->belongsToMany('App\Test', 'inspecteur_test', 'id_inspecteur', 'id_test');
    }

    public function activiter()
    {

        return $this->belongsToMany('App\Activiter', 'inspecteur_activiter', 'id_inspecteur', 'id_activiter');
    }

    public function gestionsalle()
    {

        return $this->belongsToMany('App\GestSalle', 'interagir', 'id_inspecteur', 'id_gestionsalle');
    }
}

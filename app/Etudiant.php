<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Etudiant extends Authenticatable
{
    use Notifiable;

    protected $table = 'etudient';
    protected $guard = 'etudiant';

      protected $fillable = [
        'nom_etudient','role', 'email', 'password','prenom_etudient','telephone','ville_residence','ville_origine','adresse_etudient','code_massar','sexe','date_naissance','id_academies_fk','id_directions_fk','id_niveauscolaire_fk'
      ];
    protected $guarded = [];

    protected $hidden = [

        'password', 'remember_token',
    ];

    public function niveauscolaire()
    {
        return $this->belongsTo('App\Niveauscolaire');
    }

    public function note()
    {
        return $this->hasMany('App\Note');
    }

    public function agenda()
    {
        return $this->belongsTo('App\Agenda');
    }

    public function parent()
    {
        return $this->belongsTo('App\ParentTuteur');
    }

    public function directeureg()
    {
        return $this->belongsTo('App\DirecteurReg');
    }
    public function chat()
    {

        return $this->hasMany('App\Chats');
    }

    public function conference()
    {

        return $this->hasOne('App\Conference');
    }

    public function seance()
    {

        return $this->belongsToMany('App\Seance', 'etudient_seance', 'id_etudient', 'id_seance');
    }

    public function activiter()
    {

        return $this->belongsToMany('App\Activiter', 'etudient_activiter', 'id_etudient', 'id_activiter');
    }

    public function correction()
    {

        return $this->belongsToMany('App\Models\Correction', 'etudient_correction', 'id_etudient', 'id_correction');
    }
    public function test()
    {

        return $this->belongsToMany('App\Models\Test', 'etudient_test', 'id_etudient', 'id_test');
    }

    public function admin()
    {

        return $this->belongsToMany('App\Models\Admin', 'gerer', 'id_etudient', 'id_admin');
    }
}

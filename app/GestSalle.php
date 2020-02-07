<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class GestSalle extends Authenticatable
{
    use Notifiable;

    protected $table = 'gestion_salle';
    protected $guard = 'gestionnaire_salle';

     protected $fillable = [
         'nom_gestionsalle','prenom_gestionsalle', 'email', 'password','adresse_gestionsalle','id_academies_fk','id_directions_fk','id_gestionsalle_fk','id_dirprovinciale_fk'
     ];

    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function directeureg()
    {
        return $this->belongsTo('App\DirecteurReg');
    }

    public function directeuprv()
    {
        return $this->belongsTo('App\DirecteurProv');
    }

    public function salle()
    {
        return $this->hasOne('App\Salles');
    }

    public function seance()
    {

        return $this->hasOne('App\Seance');
    }

    public function chat()
    {

        return $this->hasMany('App\Chats');
    }

    public function conference()
    {

        return $this->hasOne('App\Conference');
    }

    public function inspecteur()
    {

        return $this->belongsToMany('App\InspecteurReg', 'interagir', 'id_gestionsalle', 'id_inspecteur');
    }
}

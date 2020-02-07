<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DirecteurProv extends Authenticatable
{
    use Notifiable;

    protected $table ='directeur_provinciale';
    protected $guard = 'directeur_prov';

    protected $fillable = [
        'nom_directeurprovinciale', 'prenom_directeurprovinciale','email','telephone','role', 'adresse_directeurprovinciale', 'password','id_academies_fk','id_directions_fk','id_affectation_fk'
   ];

    protected $guarded = [];

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
        return $this->belongsTo('App\DirecteurReg', 'id_affectation_fk');
    }

    public function enseignant()
    {
        return $this->hasMany('App\Enseignant');
    }

    public function etablissement()
    {
        return $this->hasMany('App\Etablissement');
    }

    public function correction()
    {
        return $this->hasMany('App\Correction');
    }

    public function seance()
    {

        return $this->hasMany('App\Seance');
    }

    public function gestionsalle()
    {
        return $this->hasMany('App\GestSalle');
    }

    public function parent()
    {

        return $this->hasMany('App\ParentTuteur');
    }

    public function salle()
    {
        return $this->hasMany('App\Salles');
    }

    public function chat()
    {
        return $this->hasMany('App\Chats');
    }

    public function conference()
    {

        return $this->hasOne('App\Conference');
    }

    public function admin()
    {

        return $this->belongsToMany('App\Admin', 'gerer', 'id_dirprovinciale', 'id_admin');
    }
}

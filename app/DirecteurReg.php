<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DirecteurReg extends Authenticatable
{
    use Notifiable;

    protected $guard = 'directeur_reg';
    protected $table ='directeur_regional'; 

    protected $fillable = [
        'nom_directeurregional', 'prenom_directeurregional','email','telephone', 'adresse_directeurregional','role', 'password','affectation', 'id_academies_fk','id_directions_fk'  
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

    public function enseignant()
    {
        return $this->hasMany('App\Enseignant');
    }

    public function etudient()
    {
        return $this->hasMany('App\Etudiant');
    }

    public function cours()
    {
        return $this->hasMany('App\Cours');
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

    public function directeuprv()
    {
        return $this->hasMany('App\DirecteurProv');
    }

    public function inspecteurregionale()
    {
        return $this->hasMany('App\InspecteurReg');
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

    public function dirprv(){

        return $this->hasMany('App\DirecteurProv');
    }


}

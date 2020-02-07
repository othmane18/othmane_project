<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ParentTuteur extends Authenticatable
{
    use Notifiable;

    protected $table = 'parent';
    protected $guard = 'parent_tuteur';

      protected $fillable = [
          'nom_parent','prenom_parent', 'email', 'password','adresse_parent','telephone','id_academies_fk','id_directions_fk','role'  
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

    public function agenda()
    {
        return $this->hasMany('App\Agenda');
    }

    public function etudient()
    {
        return $this->hasMany('App\Etudiant');
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
        return $this->belongsToMany('App\Admin', 'gerer', 'id_parent', 'id_admin');
    }

    public function aref(){

        return $this->belongsTo('App\Academierregionale' , 'id_academies_fk');

    }

    public function directions(){

        return $this->belongsTo('App\Directionprovinciale' , 'id_directions_fk');

    }
}

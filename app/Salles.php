<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Salles extends Authenticatable
{
    use Notifiable;

    protected $guard = 'salles';
    protected $table = 'salle';

    protected $fillable = [

        'capacite_salle',
        'num_salle',
        'email',
        'password',
        'id_academies_fk',
        'id_directions_fk',
        'id_dirprovinciale_fk'

    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function directeureg()
    {
        return $this->belongsTo('App\DirecteurReg' , );
    }

    public function directeuprv()
    {
        return $this->belongsTo('App\DirecteurProv' , 'id_dirprovinciale_fk');
    }

    public function etablissement()
    {
        return $this->belongsTo('App\Etablissement');
    }

    function seance()
    {
        return $this->belongsTo('App\Seance');
    }

    public function gestionsalle()
    {
        return $this->hasOne('App\GestSalle');
    }

    public function agenda()
    {
        return $this->hasOne('App\Agenda');
    }

    public function admin()
    {

        return $this->belongsToMany('App\Admin', 'gerer', 'id_salle', 'id_admin');
    }
}

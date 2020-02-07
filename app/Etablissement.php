<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model


{

    protected $table = "etablissement";

    protected $fillable = [

        'libelle_etablissement',
        'type_etablissement',
        'code_grisa',
        'adresse_etablissement',
        'telephone_etablissement',
        'ville_etablissement'

    ];  

    public function salle()
    {
        return $this->hasMany('App\Salles');
    }

    public function directeureg()
    {
        return $this->belongsTo('App\DirecteurReg');
    }

    public function directeuprv()
    {
        return $this->belongsTo('App\DirecteurProv');
    }

    public function conference()
    {

        return $this->hasOne('App\Conference');
    }
    public function filiere()
    {

        return $this->belongsToMany('App\Filiere', 'etablissement_filiere', 'id_etablissement', 'id_filiere');
    }

    public function admin()
    {

        return $this->belongsToMany('App\Admin', 'gerer', 'id_etablissement', 'id_admin');
    }

    public function inspecteur()
    {

        return $this->belongsToMany('App\InspecteurReg', 'etablissement_inspecteur', 'id_etablissement', 'id_inspecteur');
    }
}

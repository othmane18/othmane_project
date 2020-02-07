<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    function seance()
    {

        return $this->hasOne('App\Models\Seance');
    }

    public function etudient()
    {
        return $this->hasOne('App\Models\Etudiant');
    }

    public function directeuprv()
    {
        return $this->hasOne('App\Models\DirecteurProv');
    }

    public function directeureg()
    {
        return $this->hasOne('App\Models\DirecteurReg');
    }

    public function enseignant()
    {
        return $this->hasOne('App\Models\Enseignant');
    }

    public function gestionsalle()
    {
        return $this->hasOne('App\Models\GestSalle');
    }

    public function inspecteurregionale()
    {
        return $this->hasOne('App\Models\InspecteurReg');
    }

    public function parent()
    {
        return $this->hasOne('App\Models\ParentTuteur');
    }

    public function admin()
    {
        return $this->hasOne('App\Models\Admin');
    }
}

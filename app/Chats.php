<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{

    public function seance()
    {

        return $this->belongsTo('App\Models\Seance');
    }

    public function etudient()
    {
        return $this->belongsTo('App\Models\Etudiant');
    }

    public function directeuprv()
    {
        return $this->belongsTo('App\Models\DirecteurProv');
    }

    public function directeureg()
    {
        return $this->belongsTo('App\Models\DirecteurReg');
    }

    public function enseignant()
    {
        return $this->belongsTo('App\Models\Enseignant');
    }

    public function gestionsalle()
    {
        return $this->belongsTo('App\Models\GestSalle');
    }

    public function inspecteurregionale()
    {
        return $this->belongsTo('App\Models\InspecteurReg');
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\ParentTuteur');
    }
}

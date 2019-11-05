<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class InspecteurReg extends Authenticatable
{
    use Notifiable;

    protected $guard = 'inspecteur_reg';

    protected $fillable = [
        'nom_inspect', 'email_inspect', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

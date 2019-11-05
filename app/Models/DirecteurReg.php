<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DirecteurReg extends Authenticatable
{
    use Notifiable;

    protected $guard = 'directeur_reg';

    protected $fillable = [
        'nom_dreg', 'email_dreg', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DirecteurProv extends Authenticatable
{
    use Notifiable;

    protected $guard = 'directeur_prov';

    protected $fillable = [
        'nom_dr_prov', 'email_dr_prov', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

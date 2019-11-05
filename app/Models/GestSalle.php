<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class GestSalle extends Authenticatable
{
    use Notifiable;

    protected $guard = 'gestionnaire_salle';

    protected $fillable = [
        'nom_gestionnaire', 'email_gestionnaire', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

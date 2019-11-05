<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Enseignant extends Authenticatable
{
    use Notifiable;

    protected $guard = 'enseignant';

    protected $fillable = [
        'nom_enseignant', 'email_enseignant', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

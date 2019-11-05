<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Etudiant extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'nom_etudiant', 'email_etudiant', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

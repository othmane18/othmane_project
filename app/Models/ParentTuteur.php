<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ParentTuteur extends Authenticatable
{
    use Notifiable;

    protected $guard = 'parent_tuteur';

    protected $fillable = [
        'nom_parent', 'email_parent', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

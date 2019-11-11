<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'name_admin', 'email_admin', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

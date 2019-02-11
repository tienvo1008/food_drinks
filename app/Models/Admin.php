<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use Notifiable;

    protected $table = 'admins';

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'gender',
        'address',
        'avatar',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public $timestamps = false;

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $table = 'admins';
    protected $primaryKey = 'id' ;
    protected $fillable = [
        'name',
        'gmail',
        'address',
        'password',
        'date_of_birth',
        'image'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
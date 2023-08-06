<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'cus_id' ;
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
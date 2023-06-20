<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
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
}
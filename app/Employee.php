<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'gender', 'date_of_birth', 'address', 'email', 'phone',
    ];
}

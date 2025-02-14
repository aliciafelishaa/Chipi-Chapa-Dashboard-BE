<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'employee_name',
        'employee_age',
        'employee_address',
        'employee_phonenumber'
    ];
}

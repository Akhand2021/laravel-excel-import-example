<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'email', 'phone'];

    // If you want to specify a different table name, you can do it like this:
    protected $table = 'employee_table';
}

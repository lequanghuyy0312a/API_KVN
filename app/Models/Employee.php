<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table =  'employee';
    protected $filltable = 'id, firstName, lastName, phoneNumber, address, birthday, sex, image, beganOnUTC, updatedOnUTC, acctive,email';
    protected $primarykey = 'id';
    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['school_payment_times', 'scholarship', 'create_by', 'update_by', 'id_account', 'create_at', 'update_at'];
}

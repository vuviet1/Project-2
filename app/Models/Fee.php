<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;
    protected $fillable = ['school_payment_times', 'original_fee', 'id_school_year' , 'id_major', 'create_at', 'update_at'];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School_year extends Model
{
    use HasFactory;
    protected $fillable = ['number_course', 'create_by', 'update_by', 'create_at', 'update_at'];
}

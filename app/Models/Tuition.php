<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuition extends Model
{
    use HasFactory;
    protected $fillable = ['payment_times', 'fee', 'note', 'id_student', 'id_fee', 'create_at', 'update_at'];
}

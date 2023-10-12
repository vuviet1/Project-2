<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['school_payment_times', 'scholarship', 'id_user', 'create_at', 'update_at'];
    public function show(){
        $fillable = DB::table('students')
            ->join('users', 'students.id_user', '=', 'users.id')
            ->join('tuitions', 'tuitions.id_student', '=', 'students.id')
            ->join('fees', 'fees.id', '=', 'tuitions.id_fee')
            ->select('students.*', 'users.name', 'users.id as id_user', 'tuitions.payment_times', 'fees.original_fee')
            ->get();
        return $fillable;
    }

}

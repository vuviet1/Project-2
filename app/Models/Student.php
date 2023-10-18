<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['school_payment_times', 'scholarship', 'id_user', 'create_at', 'update_at'];
    private $limit = 5;

    public function show(){
        $fillable = DB::table('students')
            ->join('users', 'students.id_user', '=', 'users.id')
            ->leftJoin('tuitions', 'tuitions.id_student', '=', 'students.id')
            ->leftJoin('fees', 'fees.id', '=', 'tuitions.id_fee')
            ->select('students.*', 'users.name', 'users.id as id_user', 'fees.school_payment_times as fee_time', 'fees.original_fee' )
            ->paginate($this->limit);
        return $fillable;
    }

    public function search($searchTerm){
        return DB::table('students')
            ->join('users', 'students.id_user', '=', 'users.id')
            ->leftJoin('tuitions', 'tuitions.id_student', '=', 'students.id')
            ->leftJoin('fees', 'fees.id', '=', 'tuitions.id_fee')
            ->select('students.*', 'users.name', 'users.id as id_user', 'fees.school_payment_times as fee_time', 'fees.original_fee' )
            ->where('students.id', 'like', "%$searchTerm%")
            ->paginate($this->limit);
    }
}

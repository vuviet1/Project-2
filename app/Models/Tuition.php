<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tuition extends Model
{
    use HasFactory;
    protected $fillable = ['payment_times', 'fee', 'note', 'id_student', 'id_fee', 'create_at', 'update_at'];
    private $limit = 5;

    public function show(){
        $fillable = DB::table('tuitions')
            ->join('students', 'tuitions.id_student', '=', 'students.id')
            ->join('fees', 'tuitions.id_fee', '=', 'fees.id')
            ->join('users', 'students.id_user', '=', 'users.id')
            ->select('students.school_payment_times as student_school_payment_times', 'fees.school_payment_times', 'fees.original_fee', 'users.name', 'tuitions.*')
            ->get();
        return $fillable;
    }

    public function showStudent()
    {
        $fillable = DB::table('students')
            ->join('users', 'students.id_user', '=', 'users.id')
            ->select('students.*', 'users.name')
            ->get();
        return $fillable;
    }

    public function showFee(){
        $fillable = DB::table('fees')
            ->join('majors', 'fees.id_major', '=', 'majors.id')
            ->join('school_years', 'fees.id_school_year', '=', 'school_years.id')
            ->select( 'fees.*', 'majors.majors_name', 'school_years.number_course')
            ->get();
        return $fillable;
    }

//    public function search($searchTerm){
//        return DB::table('tuitions')
//            ->join('students', 'tuitions.id_student', '=', 'students.id')
//            ->join('fees', 'tuitions.id_fee', '=', 'fees.id')
//            ->join('users', 'students.id_user', '=', 'users.id')
//            ->select('students.school_payment_times as student_school_payment_times',
//                'fees.school_payment_times as fee_school_payment_times',
//                'fees.original_fee',
//                'users.name',
//                'tuitions.*')
//            ->where('tuitions.id_student', 'like', "%$searchTerm%")
//            ->paginate($this->limit);
//    }
}

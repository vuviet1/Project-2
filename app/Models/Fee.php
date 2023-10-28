<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Fee extends Model
{
    use HasFactory;
    protected $fillable = ['school_payment_times', 'original_fee', 'id_school_year' , 'id_major', 'create_at', 'update_at'];
    private $limit = 5;

    public function show(){
        $fillable = DB::table('fees')
            ->join('majors', 'fees.id_major', '=', 'majors.id')
            ->join('school_years', 'fees.id_school_year', '=', 'school_years.id')
            ->select( 'fees.*', 'majors.majors_name', 'school_years.number_course')
            ->orderBy('fees.id', 'desc')
            ->orderBy('fees.school_payment_times', 'asc')
            ->paginate($this->limit);
        return $fillable;
    }

    public function showYear(){
        $fillable = DB::table('school_years')->get();
        return $fillable;
    }

    public function showMajor(){
        $fillable = DB::table('majors')->get();
        return $fillable;
    }

    public function search($searchTerm){
        return DB::table('fees')
            ->join('majors', 'fees.id_major', '=', 'majors.id')
            ->join('school_years', 'fees.id_school_year', '=', 'school_years.id')
            ->select( 'fees.*', 'majors.majors_name', 'school_years.number_course')
            ->where('school_years.number_course', 'like', "%$searchTerm%")
            ->orderBy('fees.id_school_year', 'desc')
            ->orderBy('fees.school_payment_times', 'asc')
            ->paginate($this->limit);
    }

}

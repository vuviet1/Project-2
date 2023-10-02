<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class School_year extends Model
{
    use HasFactory;
    protected $fillable = ['number_course', 'create_at', 'update_at'];
    public function show(){
        $fillable = DB::table('school_years')->get();
        return $fillable;
    }
    public function create(Request $request){
        dd($request->all());
    }
}

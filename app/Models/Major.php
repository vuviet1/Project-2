<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Major extends Model
{
    use HasFactory;
    protected $fillable = ['majors_name', 'create_at', 'update_at'];
    public function show(){
        $fillable = DB::table('majors')->get();
        return $fillable;
    }


}

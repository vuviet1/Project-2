<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Student::select('id', 'created_at')->get()->groupBy(function ($data){
           return Carbon::parse($data->created_at)->format('Y');
        });
        $years = [];
        $yearsCount = [];
        foreach ($data as $year => $value){
            $years[] = $year;
            $yearsCount[] = count($value);
        }
        return view('home', ['years'=>$years, 'yearsCount' => $yearsCount]);
    }
}

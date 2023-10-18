<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public $data = [];
    private $student; // Renamed the variable to follow naming conventions

    public function __construct()
    {
        $this->student = new Student(); // Corrected the instantiation
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['student'] = $this->student->show();
        return view('Management.Student.student', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Store a new student in the database (if needed)
        $school_payment_times = $request->input('school_payment_times');
        $scholarship = $request->input('scholarship');
        $id_user = $request->input('id_user');
        $result = DB::table('students')->insert([
            'scholarship' => $scholarship, 'school_payment_times' => $school_payment_times, 'id_user' => $id_user
        ]);
        if($result){
            flash()->addSuccess('Thêm thành công');
            return redirect()->route('student');
        }else{
            flash()->addError("Thêm thất bại");
            return redirect()->route('student');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        // Update a specific school year in the database based on the provided ID
        $id = $request->input('id');
        $school_payment_times = $request->input('school_payment_times');
        $scholarship = $request->input('scholarship');
        $check =  DB::table('students')->get();
        foreach ($check as $key) {
            if($key -> school_payment_times == $school_payment_times){
                flash()->addError("Thêm thất bại");
                return redirect()->route('student');
            }
        }
        $result = DB::table('students')->where('id', '=', $id)->update([
                'scholarship' => $scholarship, 'school_payment_times' => $school_payment_times
        ]);
        if($result){
            flash()->addSuccess('Sửa thành công');
            return redirect()->route('student');
        }else{
            flash()->addError("Sửa thất bại");
            return redirect()->route('student');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->input('id');
        $result = DB::table('students')->where('id', '=', $id)->delete();
        if($result){
            flash()->addSuccess('Xóa thành công');
            return redirect()->route('student');
        }else{
            flash()->addError("Xóa thất bại");
            return redirect()->route('student');
        }
    }

    //    Search
    public function search(Request $request){
        $search = $request->input('search');
        if (empty($search)) {
            return redirect()->route('student');
        } else {
            $this->data['student'] = (new Student)->search($search);
            $this->data['search'] = $search;
            $this->data['studentCount'] = $this->data['student']->count();
        }
        return view('Management.Student.student', $this->data);
    }
}

<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School_year; // Corrected the import statement
use Illuminate\Support\Facades\DB;

class SchoolYearController extends Controller
{
    public $data = [];
    private $schoolYear; // Renamed the variable to follow naming conventions

    public function __construct()
    {
        $this->schoolYear = new School_year(); // Corrected the instantiation
    }

    public function index()
    {
        // Use $this->schoolYear to access the model's methods
        $this->data['schoolYears'] = $this->schoolYear->show();
//        $schoolYears = $this->schoolYear->show(); // Assuming you want to retrieve all school years
//        return view('Management.SchoolYear.schoolyear', compact('schoolYears'));
        return view('Management.SchoolYear.schoolyear', $this->data);
    }

    public function create()
    {
        // Show a form to create a new school year (if needed)

    }

    public function store(Request $request)
    {
        // Store a new school year in the database (if needed)
        $number_course = $request->input('number_course');
        $result = DB::table('school_years')->insert([
            'number_course' => $number_course
        ]);
        if($result){
            flash()->addSuccess('Thêm thành công');
            return redirect()->route('school_year');
        }else{
            flash()->addSuccess("Thêm thất bại");
            return redirect()->route('school_year');
        }
    }

    public function show(string $id)
    {
        // Show a specific school year based on the provided ID
        // Example: $schoolYear = $this->schoolYear->find($id);

        // Return the view with the specific school year data
        // Example: return view('Management.SchoolYear.show', compact('schoolYear'));
    }

    public function edit(string $id)
    {
        // Show a form to edit a specific school year based on the provided ID
    }

    public function update(Request $request)
    {
        // Update a specific school year in the database based on the provided ID
        $id = $request->input('id');
        $number_course = $request->input('number_course');
        $result = DB::table('school_years')->where('id', '=', $id)->update([
            'number_course' => $number_course
        ]);
        if($result){
            flash()->addSuccess('Sửa thành công');
            return redirect()->route('school_year');
        }else{
            flash()->addSuccess("Sửa thất bại");
            return redirect()->route('school_year');
        }
    }

    public function destroy(Request $request)
    {
        // Delete a specific school year from the database based on the provided ID
        $id = $request->input('id');
        $result = DB::table('school_years')->where('id', '=', $id)->delete();
        if($result){
            flash()->addSuccess('Xóa thành công');
            return redirect()->route('school_year');
        }else{
            flash()->addSuccess("Xóa thất bại");
            return redirect()->route('school_year');
        }
    }
}

<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MajorController extends Controller
{
    public $data = [];

    private $major; // Renamed the variable to follow naming conventions

    public function __construct()
    {
        $this->major = new Major(); // Corrected the instantiation
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $this->data['major'] = $this->major->show();
//        $major = $this->major->show(); // Assuming you want to retrieve all school years
//        return view('Management.Major.major', compact('major'));
        return view('Management.Major.major', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Store a new major in the database (if needed)
        $majors_name = $request->input('majors_name');
        $result = DB::table('majors')->insert([
            'majors_name' => $majors_name
        ]);
        if($result){
            flash()->addSuccess('Thêm thành công');
            return redirect()->route('major');
        }else{
            flash()->addSuccess("Thêm thất bại");
            return redirect()->route('major');
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
        // Update a specific major in the database based on the provided ID
        $id = $request->input('id');
        $majors_name = $request->input('majors_name');
        $result = DB::table('majors')->where('id', '=', $id)->update([
            'majors_name' => $majors_name
        ]);
        if($result){
            flash()->addSuccess('Sửa thành công');
            return redirect()->route('major');
        }else{
            flash()->addSuccess("Sửa thất bại");
            return redirect()->route('major');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        // Delete a specific major from the database based on the provided ID
        $id = $request->input('id');
        $result = DB::table('majors')->where('id', '=', $id)->delete();
        if($result){
            flash()->addSuccess('Xóa thành công');
            return redirect()->route('major');
        }else{
            flash()->addSuccess("Xóa thất bại");
            return redirect()->route('major');
        }
    }
}

<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Fee;
use App\Models\Student;
use App\Models\Tuition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\tuitionExport;
class TuitionController extends Controller
{

    public $data = [];

    private $tuition; // Renamed the variable to follow naming conventions

    public function __construct()
    {
        $this->tuition = new Tuition(); // Corrected the instantiation
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $this->data['tuition'] = $this->tuition->show();
        $this->data['student'] = $this->tuition->showStudent();
        $this->data['fee'] = $this->tuition->showFee();
        return view('Management.Tuition.tuition', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function export()
    {
        //
        return Excel::download(new tuitionExport(), 'tuition.xlsx');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $payment_times = $request->input('payment_times');
        $note = $request->input('note');
        $id_student = $request->input('id_student');
        $id_fee = $request->input('id_fee');
        $scholarship = Student::where('id', $id_student)->value('scholarship');
        $original_fee = Fee::where('id', $id_fee)->value('original_fee');
        $fee = round(($original_fee - $scholarship) / 30);
        $result = DB::table('tuitions')->insert([
            'payment_times' => $payment_times, 'fee' => $fee, 'note' => $note, 'id_student' => $id_student, 'id_fee' => $id_fee, 'created_at' => now(),
        ]);
        if($result){
            DB::table('students')->where('id', $id_student)->update(['school_payment_times' => $payment_times]);
            flash()->addSuccess('Thêm thành công');
            return redirect()->route('tuition');
        }else{
            flash()->addError("Thêm thất bại");
            return redirect()->route('tuition');
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
        // Update a specific major in the database based on the provided ID
        $id = $request->input('id');
        $payment_times = $request->input('payment_times');
        $note = $request->input('note');
        $id_student = $request->input('id_student');
        $result = DB::table('tuitions')->where('id', '=', $id)->update([
            'payment_times' => $payment_times, 'note' => $note, 'updated_at' => now(),
        ]);
        if($result){
            DB::table('students')->where('id', $id_student)->update(['school_payment_times' => $payment_times]);
            flash()->addSuccess('Sửa thành công');
            return redirect()->route('tuition');
        }else{
            flash()->addError("Sửa thất bại");
            return redirect()->route('tuition');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->input('id');
        $result = DB::table('tuitions')->where('id', '=', $id)->delete();
        if($result){
            flash()->addSuccess('Xóa thành công');
            return redirect()->route('tuition');
        }else{
            flash()->addError("Xóa thất bại");
            return redirect()->route('tuition');
        }
    }

    //    Search
    public function search(Request $request){
        $this->data['tuition'] = $this->tuition->show();
        $this->data['student'] = $this->tuition->showStudent();
        $this->data['fee'] = $this->tuition->showFee();
        $search = $request->input('search');
        if (empty($search)) {
            return redirect()->route('tuition');
        } else {
            $this->data['tuition'] = (new Tuition)->search($search);
            $this->data['search'] = $search;
            $this->data['tuitionCount'] = $this->data['tuition']->count();
        }
        return view('Management.Tuition.tuition', $this->data);
    }
}

<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Tuition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $payment_times = $request->input('payment_times');
        $fee = $request->input('fee');
        $note = $request->input('note');
        $id_student = $request->input('id_student');
        $id_fee = $request->input('id_fee');

        $result = DB::table('tuitions')->insert([
            'payment_times' => $payment_times, 'fee' => $fee, 'note' => $note, 'id_student' => $id_student, 'id_fee' => $id_fee
        ]);
        if($result){
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
        $fee = $request->input('fee');
        $note = $request->input('note');
        $id_student = $request->input('id_student');
        $id_fee = $request->input('id_fee');

        $result = DB::table('tuitions')->where('id', '=', $id)->update([
            'payment_times' => $payment_times, 'fee' => $fee, 'note' => $note, 'id_student' => $id_student, 'id_fee' => $id_fee
        ]);
        if($result){
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
}

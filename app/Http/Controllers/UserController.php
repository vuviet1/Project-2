<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class UserController extends Controller
{

    public $data = [];

    private $user; // Renamed the variable to follow naming conventions

    public function __construct()
    {
        $this->user = new User(); // Corrected the instantiation
    }

    public function index()
    {
        $this->data['users'] = User::paginate();

        return view('users.index', $this->data);
    }
    public function import(Request $request){
        $file = $request->file('file');
        Excel::import(new UsersImport(), $file);
        flash()->addSuccess('Import thành công');
        return redirect()->back();
    }
    public function export()
    {
        //
        return Excel::download(new UsersExport(), 'mau.xlsx');
    }

    public function store(Request $request)
    {
        //
        $name = $request->input('name');
        $email = $request->input('email');
        $birthday = $request->input('birthday');
        $phone_number = $request->input('phone_number');
        $address = $request->input('address');
        $cccd = $request->input('cccd');
        $role = $request->input('role');
        $password = $request->input('password');

        $check =  DB::table('users')->get();
        foreach ($check as $key) {
            if($key -> email == $email || $key -> cccd == $cccd || $key -> phone_number == $phone_number){
                flash()->addError("Thêm thất bại");
                return redirect()->route('user');
            }
        }

        $result = DB::table('users')->insert([
            'name' => $name, 'email' => $email, 'birthday' => $birthday, 'phone_number' => $phone_number, 'address' => $address, 'cccd' => $cccd, 'password' => $password, 'role' => $role
        ]);
        if($result){
            flash()->addSuccess('Thêm thành công');
            return redirect()->route('user');
        }else{
            flash()->addError("Thêm thất bại");
            return redirect()->route('user');
        }
    }

    public function update(Request $request)
    {
        // Update a specific major in the database based on the provided ID
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $birthday = $request->input('birthday');
        $phone_number = $request->input('phone_number');
        $address = $request->input('address');
        $cccd = $request->input('cccd');
        $role = $request->input('role');
        $password = $request->input('password');

        $check =  DB::table('users')->get();
        foreach ($check as $key) {
            if($key -> email == $email || $key -> cccd == $cccd || $key -> phone_number == $phone_number){
                flash()->addError("Thêm thất bại");
                return redirect()->route('user');
            }
        }

        $result = DB::table('users')->where('id', '=', $id)->update([
            'name' => $name, 'email' => $email, 'birthday' => $birthday, 'phone_number' => $phone_number, 'address' => $address, 'cccd' => $cccd, 'role' => $role, 'password' => $password,
        ]);
        if($result){
            flash()->addSuccess('Sửa thành công');
            return redirect()->route('user');
        }else{
            flash()->addError("Sửa thất bại");
            return redirect()->route('user');
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
        $result = DB::table('users')->where('id', '=', $id)->delete();
        if($result){
            flash()->addSuccess('Xóa thành công');
            return redirect()->route('user');
        }else{
            flash()->addError("Xóa thất bại");
            return redirect()->route('user');
        }
    }

}

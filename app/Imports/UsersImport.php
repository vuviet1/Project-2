<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class UsersImport implements ToCollection, WithHeadingRow
{
    public function headingRow(): int
    {
        return 1;
    }

    public function collection(Collection $collection)
    {

        foreach ($collection as $row) {
            $birthday = Carbon::createFromFormat('d/m/Y', $row['birthday'])->format('Y-m-d');
            $check = User::Where('student_code', $row['student_code'])
            ->Where('name', $row['name'])
            ->Where('email', $row['email'])
            ->Where('birthday', $birthday)
            ->Where('cccd', $row['cccd'])
            ->Where('phone_number', $row['phone_number'])->exists();
            if ($check) {
                continue;
            }else{
            $user = User::create([
                'student_code' => $row['student_code'],
                'name' => $row['name'],
                'email' => $row['email'],
                'password' => Hash::make($row['password']),
                'birthday' => $birthday,
                'address' => $row['address'],
                'phone_number' => $row['phone_number'],
                'cccd' => $row['cccd'],
                'role' => 0,
            ]);
            $student = Student::create([
                'id_user' => $user->id,
                'scholarship' => $row['scholarship'],
                'status' => 1,
                'school_payment_times' => 0,
            ]);
            }
        }
        if(!empty($student) && !empty($user)){
            flash()->addSuccess('Thêm thành công');
        }else{

            flash()->addError("Thêm thất bại - Dữ liệu đã tồn tại");
        }
    }
}

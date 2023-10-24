<?php

namespace App\Imports;

use App\Models\Student;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToCollection, WithHeadingRow
{
    public function headingRow(): int
    {
        return 1;
    }

    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
           $user= User::create([
                // 'id' => $row['student_code'],
                // dd($row['student_code']),
                'name' => $row['name'],
                'email' => $row['email'],
                'password' => Hash::make($row['password']),
                // 'birthday' => Carbon::createFromFormat('d/m/Y', $row['birthday'])->format('Y-m-d'),
                'address' => $row['address'],
                'phone_number' => $row['phone_number'],
                'cccd' => $row['cccd'],
                'role' => 0,
            ]);

            
        }


    }
}

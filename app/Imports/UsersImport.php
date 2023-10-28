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

    public function map($row): array
    {
        if (gettype($row['birthday']) == 'double') {
            $timestamp = Date::excelToTimestamp($row['birthday']);
            $formattedBirthday = Carbon::createFromTimestamp($timestamp)->format('d/m/Y');
            $row['birthday'] = $formattedBirthday;
        }
        return $row['birthday'];
    }

    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            $user = User::create([
                'id' => $row['student_code'],
                'name' => $row['name'],
                'email' => $row['email'],
                'password' => Hash::make($row['password']),
                'birthday' => $row['birthday'], // 'birthday' field is now correctly formatted
                'address' => $row['address'],
                'phone_number' => $row['phone_number'],
                'cccd' => $row['cccd'],
                'role' => 0,
            ]);

            Student::create([
                'id_user' => $row['student_code'],
                'scholarship' => $row['scholarship'],
                'status' => 1,
                'school_payment_times' => 0,
            ]);
        }
    }
}

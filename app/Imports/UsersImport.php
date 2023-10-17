<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            DB::table('users')->create([
                'id'          => $row['Student code'],
                'email'       => $row['Email'],
                'password'    => Hash::make($row['Password']),
                'birthday'    => $row['Birthday'],
                'address'     => $row['Address'],
                'phone_number' => $row['Phone number'],
                'cccd'        => $row['CCCD'],
                'role'        => $row['Role'],
            ]);
        }
    }
}


<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Collection;

class UsersExport implements FromCollection{
public function collection()
{
    $data = [
        [
            'Student code' => 'Value 1',
            'Email' => 'Value 2',
            'Password' => 'Value 3',
            'Birthday' => 'Value 4',
            'Address' => 'Value 5',
            'Phone number' => 'Value 6',
            'CCCD' => 'Value 7',
            'Role' => 'Value 8',
        ],
        // Add more data rows as needed
    ];

    return new Collection($data);
}

public function headings(): array
{
    return [
        'Student code',
        'Email',
        'Password',
        'Birthday',
        'Address',
        'Phone number',
        'CCCD',
        'Role',
    ];
}

}

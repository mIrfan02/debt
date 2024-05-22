<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class DebtorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $debtors = [];

        for ($i = 1; $i <= 10; $i++) {
            $debtors[] = [
                'id' => Uuid::uuid4()->toString(),
                'name' => 'Debtor ' . $i,
                'dob' => 'DOB ' . $i,
                'ssn' => 'SSN ' . $i,
                'position' => 'Position ' . $i,
                'company' => 'Company ' . $i,
                'driver_license1' => 'License1 ' . $i,
                'organization' => 'Organization ' . $i,
                'driver_license2' => 'License2 ' . $i,
                'email' => 'email' . $i . '@example.com',
                'phone' => 'Phone ' . $i,
                'fax' => 'Fax ' . $i,
                'alias1' => 'Alias1 ' . $i,
                'cell' => 'Cell ' . $i,
                'other' => 'Other ' . $i,
                'alias2' => 'Alias2 ' . $i,
                'remarks' => 'Remarks ' . $i,
            ];
        }

        // Insert the data into the database
        DB::table('debtors')->insert($debtors);
    }
}

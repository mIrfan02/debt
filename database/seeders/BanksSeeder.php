<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class BanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banks = [];

        for ($i = 1; $i <= 10; $i++) {
            $banks[] = [
                'id' => Uuid::uuid4()->toString(),
                'bank_name' => 'Bank ' . $i,
                'branch_name' => 'Branch ' . $i,
                'bank_code' => 'BankCode' . $i,
                'address' => 'Address ' . $i,
                'account_name' => 'AccountName ' . $i,
                'account_number' => 'AccountNumber ' . $i,
                'city' => 'City ' . $i,
                'state' => 'State ' . $i,
                'zip' => 'Zip ' . $i,
                'department' => 'Department ' . $i,
                'country' => 'Country ' . $i,
                'contact' => 'Contact ' . $i,
                'phone' => 'Phone ' . $i,
                'position' => 'Position ' . $i,
                'fax' => 'Fax ' . $i,
                'cell' => 'Cell ' . $i,
                'email' => 'email' . $i . '@example.com',
                'other' => 'Other ' . $i,
                'remarks' => 'Remarks ' . $i,
                'bankable_id' => Uuid::uuid4()->toString(),
                'bankable_type' => 'Type ' . $i,
            ];
        }

        // Insert the data into the database
        DB::table('banks')->insert($banks);
    }
}

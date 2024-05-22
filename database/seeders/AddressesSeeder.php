<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class AddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $addresses = [];

        for ($i = 1; $i <= 10; $i++) {
            $addresses[] = [
                'id' => Uuid::uuid4()->toString(),
                'status' => 'Active',
                'type' => 'Type ' . $i,
                'city' => 'City ' . $i,
                'country' => 'Country ' . $i,
                'street' => 'Street ' . $i,
                'state' => 'State ' . $i,
                'zip' => 'Zip ' . $i,
                'remarks' => 'Remarks ' . $i,
                'addressable_id' => Uuid::uuid4()->toString(),
                'addressable_type' => 'Type ' . $i,
            ];
        }

        // Insert the data into the database
        DB::table('addresses')->insert($addresses);
    }
}

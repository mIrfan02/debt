<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Seeder;

class RemarksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $remarks = [];

        for ($i = 1; $i <= 10; $i++) {
            $remarks[] = [
                'id' => Uuid::uuid4()->toString(),
                'title' => 'Remark ' . $i,
                'remark' => 'This is remark ' . $i,
                'notable_id' => Uuid::uuid4()->toString(),
                'notable_type' => 'Type' . $i,
            ];
        }

        // Insert the data into the database
        DB::table('remarks')->insert($remarks);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Ramsey\Uuid\Uuid;

class TicklerTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [];

        for ($i = 1; $i <= 10; $i++) {
            $types[] = [
                'id' => Uuid::uuid4()->toString(),
                'type' => 'Type ' . $i,
            ];
        }

        // Insert the data into the database
        DB::table('tickler_types')->insert($types);
    }
}

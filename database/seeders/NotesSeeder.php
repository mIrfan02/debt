<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $notes = [];

        for ($i = 1; $i <= 10; $i++) {
            $notes[] = [
                'id' => Uuid::uuid4()->toString(),
                'title' => 'Note ' . $i,
                'note' => 'This is note ' . $i,
                'notable_id' => Uuid::uuid4()->toString(),
                'notable_type' => 'Type ' . $i,
            ];
        }

        // Insert the data into the database
        DB::table('notes')->insert($notes);
    }
}

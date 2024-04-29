<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define types data
        $types = [
            ['name' => 'Tanah longsor'],
            ['name' => 'Kebakaran'],
            ['name' => 'Angin Puting Beliung'],
            ['name' => 'Banjir'],
            ['name' => 'Evakuasi'],
        ];

        // Insert data into the types table
        DB::table('types')->insert($types);
    }
}

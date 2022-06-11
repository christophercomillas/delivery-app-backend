<?php

namespace Database\Seeders;

use App\Models\CivilStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CivilStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CivilStatus::create([
            'Description'   => 'SINGLE'
        ]);

        CivilStatus::create([
            'Description'   => 'MARRIED'
        ]);

        CivilStatus::create([
            'Description'   => 'WIDOWED'
        ]);

        CivilStatus::create([
            'Description'   => 'SEPARATED'
        ]);

        CivilStatus::create([
            'Description'   => 'ANNULLED'
        ]);
    }
}

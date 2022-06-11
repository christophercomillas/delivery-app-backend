<?php

namespace Database\Seeders;

use App\Models\BirthLegitimacy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BirthLegitimacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BirthLegitimacy::create([
            'description'   => 'Legitimate',
            'user_id'       =>  '1'
        ]);

        BirthLegitimacy::create([
            'description'   => 'Illegitimate',
            'user_id'       =>  '1'
        ]);
    }
}

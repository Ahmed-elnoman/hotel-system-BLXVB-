<?php

namespace Database\Seeders;

use App\Models\positions;
use Illuminate\Database\Seeder;

class PositionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        positions::create([
            'roleTitle' => 'Hotel manager',
            'roleDecs'  => 'Hotel Manager'
        ]);
    }
}

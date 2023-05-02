<?php

namespace Database\Seeders;

use App\Models\Departments;
use Illuminate\Database\Seeder;

class DepartmentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departments::create([
            'name_department' => 'Front Office Department',
            'description_de'  => 'This department performs various functions like reservation',
            'total_conut' => 10
        ]);

        Departments::create([
            'name_department' => 'Housekeeping Department',
            'description_de'  => 'The housekeeping department is responsible for the cleanliness,',
            'total_conut' => 8
        ]);

        Departments::create([
            'name_department' => 'Service Department',
            'description_de'  => 'Food and Beverage Service Department',
            'total_conut' => 20
        ]);

        Departments::create([
            'name_department' => 'Kitchen',
            'description_de'  => 'Kitchen Department',
            'total_conut' => 15
        ]);

        Departments::create([
            'name_department' => 'Accounts',
            'description_de'  => 'Accounts Department',
            'total_conut' => 7
        ]);
    }
}

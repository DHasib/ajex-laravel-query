<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\District;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $district = new District;
        $district->name = 'BARISAL';
        $district->save();

        $district = new District;
        $district->name = 'SYLHET';
        $district->save();

        $district = new District;
        $district->name = 'DHAKA';
        $district->save();
    }
}

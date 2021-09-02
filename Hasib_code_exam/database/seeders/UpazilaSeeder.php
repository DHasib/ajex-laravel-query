<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Upazila;

class UpazilaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $upazila = new Upazila;
        $upazila->name = 'AB-1';
        $upazila->district_id = 1;
        $upazila->save();

        $upazila = new Upazila;
        $upazila->name = 'BS-2';
        $upazila->district_id = 1;
        $upazila->save();

        $upazila = new Upazila;
        $upazila->name = 'CD-3';
        $upazila->district_id = 2;
        $upazila->save();

        $upazila = new Upazila;
        $upazila->name = 'EF-4';
        $upazila->district_id = 2;
        $upazila->save();

        $upazila = new Upazila;
        $upazila->name = 'GH-5';
        $upazila->district_id = 3;
        $upazila->save();

        $upazila = new Upazila;
        $upazila->name = 'IJ-6';
        $upazila->district_id =3;
        $upazila->save();


    }
}

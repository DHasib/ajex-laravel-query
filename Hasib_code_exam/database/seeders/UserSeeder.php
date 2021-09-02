<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Rahim';
        $user->gender = 'male';
        $user->upazila_id = 1;

        $user->save();

        $user = new User;
        $user->name = 'Trisha';
        $user->gender = 'female';
        $user->upazila_id = 5;
        $user->save();
    }
}

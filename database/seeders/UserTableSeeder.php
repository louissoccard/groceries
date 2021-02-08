<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->email = "louis@soccard.uk";
        $user->name = "Louis Soccard";
        $user->password = '$2y$10$ZRRfUA2tQCLJqL5Qoyx02.k.KM0Ab6rRQdTl87Jt5/q1/STmCdxXm';
        $user->save();
    }
}

<?php

namespace Database\Seeders;
use App\models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = new User();
        $user->name = 'David Ortega';
        $user->email = 'davidortegacadena@gmail.com';
        $user->password = bcrypt('David312483');
        $user->cargo='Superadmin';
        $user->state='1';
        $user->save();

    }
}

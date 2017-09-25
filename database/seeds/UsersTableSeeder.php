<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('savehumanity')
        ]);
    }
}

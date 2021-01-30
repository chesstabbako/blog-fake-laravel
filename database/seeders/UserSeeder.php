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
        
      user::create([

        'name' => 'Ricardo',
         'email' => 'ricardojoseajedrez@gmail.com',
         'password' => bcrypt('12345678')

      ]);

      User::factory(9)->create();

    }
}

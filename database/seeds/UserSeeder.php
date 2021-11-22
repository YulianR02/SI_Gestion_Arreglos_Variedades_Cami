<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Yulian Ruiz',
            'email' => 'yulian12342@gmail.com',
            'password' => bcrypt('yulian123456')
            ])->assignRole('Administrador');


    }


}

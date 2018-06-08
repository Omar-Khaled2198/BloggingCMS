<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'=>'Omar Khaled',
            'email'=>'omar21621@gmail.com',
            'password'=>'123456789'
        ]);
    }
}

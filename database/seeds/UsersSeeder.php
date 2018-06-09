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
        $user=App\User::create([
            'name'=>'Omar Khaled',
            'email'=>'omar21621@gmail.com',
            'password'=>bcrypt('123456789'),
            'admin'=>'1'
        ]);

        App\Profile::create([
            'user_id'=>$user->id,
            'avatar'=>'upload/avatars/avatar.png',
            'about'=>'Backend Web Developer',
            'facebook'=>'facebok.com'

        ]);
    }
}

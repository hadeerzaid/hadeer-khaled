<?php

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
        //
             $user =  App\User::create([
        	'name'=>'Eman',
        	'email'=>'emanmohamed@yahoo.com',
        	'password'=>bcrypt('password'),
            'admin'=>1,

        ]);

    App\Profile::create([

        'user_id'=>$user->id,
        'avatar'=>'uploads/avatar/1.jpg',
        'about'=>'this is just information',
        'facebook'=>'link facebook',
        'youtube'=>'link youtube',
    ]);


    }
}

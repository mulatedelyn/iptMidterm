<?php

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
        $list = [
            [
                'id'=>'1',
                'lname'=>'Mula',
                'fname'=>'Tedelyn',
                'address'=>'Pinayagan Norte, Tubigon, Bohol',
                'phone'=>'09636482635',
                'email'=>'mulatedelyn@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'id'=>'2',
                'lname'=>'Daga-ang',
                'fname'=>'Kyle Christian',
                'address'=>'Nagasaki, Japan',
                'phone'=>'09467739093',
                'email'=>'kyledagaang@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'id'=>'3',
                'lname'=>'Mula',
                'fname'=>'Marriel',
                'address'=>'Pinayagan Norte, Tubigon, Bohol',
                'phone'=>'09365778492',
                'email'=>'marrielmula@yahoo.com',
                'password'=>bcrypt('password123')
            ],
        ];
        foreach($list as $user){
            \App\User::create($user);
        }

    }
}

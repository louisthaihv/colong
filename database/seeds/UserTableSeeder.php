<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $data=[

            [
                'first_name'=>'admin',
                'last_name'=>'admin',
                'email'=>'admin@admin.com',
                'username'=>'admin',
                'password'=>\Hash::make('123456'),
                'birthday'=>'1990-11-11',
                'role_id'=>1,
                'address'=>'address address',
                'phone'=>'123456',
            ],
            [
                'first_name'=>'staff',
                'last_name'=>'staff',
                'email'=>'staff@staff.com',
                'username'=>'staff',
                'password'=>\Hash::make('123456'),
                'birthday'=>'1990-11-11',
                'role_id'=>2,
                'address'=>'address address',
                'phone'=>'123456',
            ],
        	[
                'first_name'=>'member',
        		'last_name'=>'member',
                'email'=>'member@member.com',
        		'username'=>'member',
        		'password'=>\Hash::make('123456'),
        		'birthday'=>'1990-11-11',
        		'role_id'=>3,
        		'address'=>'address address',
        		'phone'=>'123456',
        	],

        ];

        User::insert($data);


        // Fake data
        $faker = Faker\Factory::create();
        foreach (range(10,30) as $index) {
            User::create([
                'first_name'=>$faker->name,
                'last_name'=>$faker->name,
                'username'=>$faker->name,
                'password'=>Hash::make('123456'),
                'email'=>$faker->email,
                'role_id'=>3, 
                ]);
        }
    }
}

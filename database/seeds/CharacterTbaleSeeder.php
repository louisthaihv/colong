<?php

use Illuminate\Database\Seeder;
use App\Character;
class CharacterTbaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Character::truncate();

        $data=[

            [

                'user_id'=>3,
                'server_id'=>1,
                'clan_id'=>1,
                'level'=>100,
                'status'=>1,
                'cs'=>5,
                'name'=>'kyppyly'
            ],
            [

                'user_id'=>3,
                'server_id'=>1,
                'clan_id'=>1,
                'level'=>16,
                'status'=>1,
                'cs'=>5,
                'name'=>'louis'
            ],[

                'user_id'=>3,
                'server_id'=>1,
                'clan_id'=>1,
                'level'=>16,
                'status'=>1,
                'cs'=>5,
                'name'=>'louis2'
            ],[

                'user_id'=>3,
                'server_id'=>1,
                'clan_id'=>1,
                'level'=>16,
                'status'=>1,
                'cs'=>5,
                'name'=>'louis3'
            ],[

                'user_id'=>3,
                'server_id'=>1,
                'clan_id'=>1,
                'level'=>16,
                'status'=>1,
                'cs'=>5,
                'name'=>'louis4'
            ],[

                'user_id'=>3,
                'server_id'=>1,
                'clan_id'=>1,
                'level'=>16,
                'status'=>1,
                'cs'=>5,
                'name'=>'louis5'
            ],[

                'user_id'=>3,
                'server_id'=>1,
                'clan_id'=>1,
                'level'=>16,
                'status'=>1,
                'cs'=>5,
                'name'=>'louis6'
            ],[

                'user_id'=>3,
                'server_id'=>1,
                'clan_id'=>1,
                'level'=>16,
                'status'=>1,
                'cs'=>5,
                'name'=>'louis7'
            ],[

                'user_id'=>3,
                'server_id'=>1,
                'clan_id'=>1,
                'level'=>16,
                'status'=>1,
                'cs'=>5,
                'name'=>'louis8'
            ],[

                'user_id'=>3,
                'server_id'=>1,
                'clan_id'=>1,
                'level'=>16,
                'status'=>1,
                'cs'=>5,
                'name'=>'louis9'
            ],
            [

                'user_id'=>3,
                'server_id'=>2,
                'clan_id'=>1,
                'level'=>15,
                'status'=>1,
                'cs'=>5,
                'name'=>'moncha'
            ],
        	[

        		'user_id'=>3,
        		'server_id'=>2,
        		'clan_id'=>1,
        		'level'=>10,
        		'status'=>1,
        		'cs'=>5,
        		'name'=>'moco'
        	],

        ];

        Character::insert($data);
    }
}

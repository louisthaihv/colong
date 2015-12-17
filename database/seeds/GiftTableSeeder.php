<?php

use Illuminate\Database\Seeder;
use App\Gift;

class GiftTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gift::truncate();
        $data=[
        
        	['code'=>"asdfsdaf3svwe33r", 'description'=>"Skill"],

        ];
        Gift::insert($data);
    }
}

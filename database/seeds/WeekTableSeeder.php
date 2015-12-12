<?php

use Illuminate\Database\Seeder;
use App\Week;

class WeekTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Week::truncate();
        $data=[

        	[
        		'name'=>'2'
        	],[
        		'name'=>'3'
        	],[
        		'name'=>'4'
        	],[
        		'name'=>'5'
        	],[
        		'name'=>'6'
        	],[
        		'name'=>'7'
        	],[
        		'name'=>'CN'
        	],

        ];
        Week::insert($data);
    }
}

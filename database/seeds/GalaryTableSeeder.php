<?php

use Illuminate\Database\Seeder;
use App\Galary;

class GalaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galary::truncate();
        $data=[
        	[
                'title'=>"",
        		'status'=>1,
        		'image_url'=>'frontend/images/baner1.png',
        	],[
                'title'=>"",
        		'status'=>1,
        		'image_url'=>'frontend/images/ABCSD.png',
        	],[
                'title'=>"",
        		'status'=>1,
        		'image_url'=>'frontend/images/baner1.png',
        	],
        ];
        Galary::insert($data);
    }
}

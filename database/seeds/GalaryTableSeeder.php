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
        		'image_url'=>'frontend/images/galaries/galary1.jpg',
        	],[
                'title'=>"",
        		'status'=>1,
        		'image_url'=>'frontend/images/galaries/galary2.jpg',
        	],[
                'title'=>"",
        		'status'=>1,
        		'image_url'=>'frontend/images/galaries/galary3.jpg',
        	],
        ];
        Galary::insert($data);
    }
}

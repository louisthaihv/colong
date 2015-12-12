<?php

use Illuminate\Database\Seeder;
use App\Slider;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::truncate();

        $data = [

        		[
                    'title'=>"",
        			'status'=>1,
                    'image_url'=>'frontend/images/banner15.jpg',
        		],[
                    'title'=>"",
        			'status'=>1,
                    'image_url'=>'frontend/images/banner14.jpg',
        		],[
                    'title'=>"",
        			'status'=>1,
                    'image_url'=>'frontend/images/banner13.jpg',
        		],[
                    'title'=>"",
        			'status'=>1,
                    'image_url'=>'frontend/images/banner12.jpg',
        		],[
                    'title'=>"",
        			'status'=>1,
                    'image_url'=>'frontend/images/banner11.jpg',
        		],[
                    'title'=>"",
        			'status'=>1,
                    'image_url'=>'frontend/images/banner12.jpg',
        		],
[
                    'title'=>"",
        			'status'=>1,
                    'image_url'=>'frontend/images/banner13.jpg',
        		],
[
                    'title'=>"",
        			'status'=>1,
                    'image_url'=>'frontend/images/banner14.jpg',
        		],


        ];

        Slider::insert($data);
    }
}

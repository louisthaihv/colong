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
                'title'=>"NẠP THẺ LẦN ĐẦU",
                'status'=>1,
                'image_url'=>'frontend/images/galaries/galary1.jpg',
            ],
            [
                'title'=>"ĐẢ THÔNG KINH MẠCH",
                'status'=>1,
                'image_url'=>'frontend/images/galaries/galary2.jpg',
            ],
            [
                'title'=>"VÒNG QUAY MAY MẮN",
                'status'=>1,
                'image_url'=>'frontend/images/galaries/galary3.jpg',
            ],
            [
                'title'=>"TRỢ THỦ ĐẠI HIỆP",
        		'status'=>1,
        		'image_url'=>'frontend/images/galaries/galary1.jpg',
        	],
            [
                'title'=>"MÁY CHỦ MỚI THẦN KIẾM",
        		'status'=>1,
        		'image_url'=>'frontend/images/galaries/galary2.jpg',
        	],
            [
                'title'=>"ĐUA TOP SERVER MỚI",
        		'status'=>1,
        		'image_url'=>'frontend/images/galaries/galary3.jpg',
        	],
        ];
        Galary::insert($data);
    }
}

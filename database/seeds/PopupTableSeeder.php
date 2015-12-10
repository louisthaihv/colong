<?php

use Illuminate\Database\Seeder;
use App\Popup;

class PopupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Popup::truncate();
        	$data = [
        		[
        			'image_url'=>'images/popups/506x229.jpg',
        			'status'=>1,
        		],
        	];
        Popup::insert($data);
    }
}

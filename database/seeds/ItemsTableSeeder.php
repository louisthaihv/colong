<?php

use Illuminate\Database\Seeder;
use App\Item;
class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::truncate();

        $data=[

        	[
        	'name'=>"cánh rồng",
        	'image_url'=>'images/items/canh.jpg'
        	],

        ];

        Item::insert($data);

    }
}

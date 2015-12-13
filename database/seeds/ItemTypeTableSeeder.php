<?php

use Illuminate\Database\Seeder;
use App\ItemType;
class ItemTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItemType::truncate();

        $data = [

        	[
        		'name'=>"áo giáp",
        	],

        ];

        ItemType::insert($data);
    }
}

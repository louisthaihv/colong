<?php

use Illuminate\Database\Seeder;
use App\GiftFresher;
class GiftFresherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	GiftFresher::truncate();
        $data = [

        	[
        		'item_id'=>'408382',
                'name' =>'tanthu1',
                'KNB' =>5000,
                'point' =>50000,
        		'image' =>'images/goi1.png',
        		'description' =>'qua tan thu so 1',
        		'status' =>true,
        	],
        	[
        		'item_id'=>'408383',
        		'name' =>'tanthu2',
                'KNB' =>5000,
                'point' =>50000,
                'image' =>'images/goi2.png',
        		'description' =>'qua tan thu so 2',
        		'status' =>true,
        	],
        	[
        		'item_id'=>'408384',
        		'name' =>'tanthu3',
                'KNB' =>10000,
                'point' =>100000,
                'image' =>'images/goi3.png',
        		'description' =>'qua tan thu so 3',
        		'status' =>true,
        	],
        	[
        		'item_id'=>'408385',
        		'name' =>'tanthu4',
                'KNB' =>10000,
                'point' =>100000,
                'image' =>'images/goi4.png',
        		'description' =>'qua tan thu so 4',
        		'status' =>true,
        	],
        ];
        GiftFresher::insert($data);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\QuaDatMoc;
class QuaDatMocTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	QuaDatMoc::truncate();
        $data =[
        	[
        		'item_id'=>'10000',
	            'name' =>'Chìa khóa hòm báu',
	            'point' =>20000,
	    		'image' =>'images/goi1.png',
	    		'description' =>'qua tan thu so 1',
	    		'status' =>true,

	    	],
	    	[
        		'item_id'=>'10001',
	            'name' =>'Cao - Bí tích bảo hợp',
	            'point' =>50000,
	    		'image' =>'images/goi1.png',
	    		'description' =>'qua tan thu so 1',
	    		'status' =>true,

	    	],
	    	[
        		'item_id'=>'10002',
	            'name' =>'Hoàn x3 XP nhân vật',
	            'point' =>100000,
	    		'image' =>'images/goi1.png',
	    		'description' =>'qua tan thu so 1',
	    		'status' =>true,

	    	],
	    	[
        		'item_id'=>'10003',
	            'name' =>'Kim Tỏa(trợ thủ môn phái)',
	            'point' =>150000,
	    		'image' =>'images/goi1.png',
	    		'description' =>'qua tan thu so 1',
	    		'status' =>true,

	    	],
	    	[
        		'item_id'=>'10004',
	            'name' =>'Cao-Tăng bản đồ',
	            'point' =>200000,
	    		'image' =>'images/goi1.png',
	    		'description' =>'qua tan thu so 1',
	    		'status' =>true,

	    	],
	    	[
        		'item_id'=>'10005',
	            'name' =>'Tuyệt học Bảo Hợp',
	            'point' =>500000,
	    		'image' =>'images/goi1.png',
	    		'description' =>'qua tan thu so 1',
	    		'status' =>true,

	    	],
        ];
        QuaDatMoc::insert($data);
    }
}

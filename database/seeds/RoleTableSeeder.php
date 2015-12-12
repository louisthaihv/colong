<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Role::truncate();

    	$data = [
    		[
    			'name'=>'admin',
    		],
    		[
    			'name'=>'staf',
    		],
    		[
    			'name'=>'member',
    		],

    	];

    	Role::insert($data);
    }
}

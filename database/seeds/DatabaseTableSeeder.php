<?php

use Illuminate\Database\Seeder;
use App\Database;

class DatabaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Database::truncate();

        $data = [

        	[
        		'server_id'=>1,
        		'name'=>'QGLAccount',
        		'username'=>'sa',
        		'password'=>'123456',
        	],
        	[
        		'server_id'=>1,
        		'name'=>'QGLGame',
        		'username'=>'sa',
        		'password'=>'123456',
        	],

        ];

        Database::insert($data);
    }
}

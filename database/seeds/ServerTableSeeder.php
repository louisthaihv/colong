<?php

use Illuminate\Database\Seeder;
use App\Server;
class ServerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Server::truncate();

        $data = [
        	["name"=>"Việt Nam", 'image'=>'images/server1.png'],
        	["name"=>"Việt Nam 2", 'image'=>'images/server2.png'],
        ];

        Server::insert($data);
    }
}

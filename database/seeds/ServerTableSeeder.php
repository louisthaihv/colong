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
        	["name"=>"Việt Nam"],
        	["name"=>"Việt Nam 2"],
        ];

        Server::insert($data);
    }
}

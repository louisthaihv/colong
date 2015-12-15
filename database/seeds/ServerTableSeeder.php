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
        	[
                "name"=>"Việt Nam", 
                'image'=>'images/server1.png',
                'username'=>'sa',
                'password'=>'123456',
                'driver'=>'sqlsrv',
                'host'=>'123.31.17.99',
                'user_db'=>'QGLAccount',
                'game_db'=>'QGLGame',

            ],
        ];

        Server::insert($data);
    }
}

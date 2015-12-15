<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Server;


class BaseController extends Controller
{

    public function __construct(){

        $servers = Server::all();
        foreach($servers as $server) {
            //connect for QLAccount
            \Config::set('database.connections.'.$server->user_db, 
                array(

                    'driver'    => $server->driver,
                    'host'      => $server->host,
                    'database'  => $server->user_db,
                    'username'  => $server->username,
                    'password'  => $server->password,

                )
            );
            //connect for QLGame
            \Config::set('database.connections.'.$server->game_db, 
                array(

                    'driver'    => $server->driver,
                    'host'      => $server->host,
                    'database'  => $server->game_db,
                    'username'  => $server->username,
                    'password'  => $server->password,

                )
            );
        }
    }

}

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
        \Config::set('database.connections.key', array(

            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'dbname',
            'username'  => 'dbuser',
            'password'  => 'dbpass',

        ));

    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    public function characters() {
    	return $this->hasMany('App\Character', 'server_id', 'id');
    }
}

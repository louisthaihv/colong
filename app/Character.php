<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
	protected $fillable=['name'];
    protected $table="Character";
    public $timestamps = false;
    
    public function user(){
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function server(){
    	return $this->belongsTo('App\Server', 'server_id', 'id');
    }

    public function clan(){
    	return $this->belongsTo('App\Clan', 'clan_id', 'id');
    }
}

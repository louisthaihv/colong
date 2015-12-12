<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiftUser extends Model
{
    protected $table="gift_users";

    public function user(){
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function gift(){
    	return $this->belongsTo('App\Gift', 'gift_id', 'id');
    }
}

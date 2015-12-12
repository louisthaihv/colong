<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyEvent extends Model
{
	protected $table="daily_events";
    protected $fillable = ['weekly_id', 'name', 'time'];

    public function weekly(){
    	return $this->belongsTo('App\Week', 'weekly_id', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'image_url'];

    public function itemType() {

    	return $this->belongsTo('App\ItemType', 'type_id', 'id');
    }
}

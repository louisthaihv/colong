<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name'];

    public function articles(){
    	return $this->hasMany('App\Article', 'category_id', 'id');
    }

    public static function getCategory($categories, $id){
    	foreach($categories as $category){
    		if($category->id == $id){
    			return $category;
    		}
    	}

    	return null;
    }

    public static function getPostAvaiable(Category $category){
       return $category->articles()->where('status', 1)->paginate(PAGINATE);
    }
}

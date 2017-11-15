<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    public static function insert($query){
    	try{
    		DB::table('posts')
    			->insert($query);
    		return true;	
    	}catch(Exception $e){
    		return false;
    	}
    	
    }
}

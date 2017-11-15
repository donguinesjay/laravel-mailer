<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mailblast extends Model
{
    public static function insert($query){
    	DB::table('mailblasts')
    		->insert($query);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB; // imports the DB namespace

class BaseModel extends Model
{
	// public $timestamps = true;
	public $timestamps = [ "created_at", "updated_at" ];

    //select
    public function selectQuery($sql_stmt){
    	return DB::select($sql_stmt); //executes the SQL statement select
    }

    public function sqlStatement($sql_stmt){
    	DB::statement($sql_stmt); //executes the SQL statement
    }
}

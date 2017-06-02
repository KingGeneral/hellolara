<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends BaseModel 
{
    //protected
    protected $primaryKey = 'id'; //primary key field name
    protected $table = 'categories'; //defines the name of the table
    //public $timestamps = false; //set the following property off.

    protected $fillable = array('name', 'created_at_ip', 'updated_at_ip'); //defines field names that can be mass assigned.  This is a security measure that ensures only authorized fieldnames are affected.
}

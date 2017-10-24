<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

   public $fillable = ['empid', 'firstname', 'middlename', 'lastname', 'phoneno', 'emailid', 'supervisorid', 'designationid'];

}



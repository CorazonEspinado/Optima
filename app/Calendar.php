<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Calendar extends Model
{
	use SoftDeletes;
	
   protected $fillable = [
        'title', 'start', 'end', 'ispolnitelj', 'resourceId', 'deleted_at'
    ];
}

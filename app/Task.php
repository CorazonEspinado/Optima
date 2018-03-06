<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{

    use SoftDeletes;
    protected $fillable = [
        'uzdevums', 'Darba devejs', 'Izpilditajs', 'status', 'Izpildit_lidz', 'name', 'deleted_at'
    ];
}

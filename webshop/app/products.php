<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //Table
    protected $table = 'products';
    //key
    public $primaryKey = 'id';
    //time
    public $timestamps = true;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainModel extends Model {
    //Table
    protected $table = 'todos';
    //key
    public $primaryKey = 'id';
    //time
    public $timestamps = true;
}

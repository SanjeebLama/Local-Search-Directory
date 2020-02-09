<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    //
    protected $table = 'agencies';
    protected $fillabe = ['title','priority','intro','body','image','video','portfolio'];
    // public $primarykey = 'id'; //adv_i
    // //timestamp
    // public $timestamps = true;
}

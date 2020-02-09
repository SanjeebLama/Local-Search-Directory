<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resturant extends Model
{
    //
    protected $table = 'resturant_table';
    protected $fillabe = ['title','priority','intro','body','image','video','portfolio'];
}

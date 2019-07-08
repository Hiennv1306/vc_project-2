<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_Users extends Model
{
    protected $table = 'info';

    protected $fillable = ['name', 'phone', 'address', 'email', 'created_at','gender', 'province','mota','password','linhvuc','updated_at'];

    public $timestamps = false;
  
}

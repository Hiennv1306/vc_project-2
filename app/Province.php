<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public $table = 'province';
    public $timestamp = true;
    protected $fillable = ['id', 'name', 'type'];
}

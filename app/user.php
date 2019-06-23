<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $fillable = ['text','name', 'Lat', 'lng', 'month', 'Date' ];
}

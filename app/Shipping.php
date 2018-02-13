<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $fillable = ['user_id', 'address', 'city', 'state', 'zip'];
    public $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    public $timestamps = false;
    protected $fillable = ['user_id', 'name', 'address', 'city', 'state', 'zip'];
}

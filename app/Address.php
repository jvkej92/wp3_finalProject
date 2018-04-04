<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $table = 'address';
    public $timestamps = false;
    protected $fillable = ['user_id', 'name', 'address', 'city', 'state', 'zip', 'address_type'];
}

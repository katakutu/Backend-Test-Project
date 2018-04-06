<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $guarded = [
    	'_token',
    	'updated_at',
    	'created_at'
    ];
    public $timestamps = true;
    protected $primaryKey = '_id';
}

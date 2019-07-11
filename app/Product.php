<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsTo('App\Category');
    }
}

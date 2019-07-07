<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    protected $table = 'categories';
    protected $primaryKey = 'category_id';

        public function products()
        {
            return $this->belongsToMany('App\Product');
        }
}

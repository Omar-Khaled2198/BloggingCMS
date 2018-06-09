<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;

    protected $fillable=[
        'title','content','image','category_id','slug'
    ];
    function category()
    {
        return $this->belongsTo('App\Category');
    }

    function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable=[
        'tag',
    ];
    function posts()
    {
        return $this->belongsTo('App/Post');
    }
}
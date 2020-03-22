<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $table = 'collections';
    protected $fillable = [
        'collection'
    ];

    public function artworks()
    {
        return $this->hasMany('App\Artwork','collection_id','id');
    }
}

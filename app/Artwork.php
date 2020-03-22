<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    protected $table = 'artworks';
    protected $fillable = [
        'name',
        'grade',
        'title',
        'description',
        'image',
        'collection_id',
    ];
}

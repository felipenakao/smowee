<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'cover', 'category_id', 'tags', 'publish_date', 'content', 'writer_id', 'abstract'];
}

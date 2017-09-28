<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'cover', 'category_id', 'tags', 'publish_date', 'content', 'writer_id'];

    public function category()
    {
      return $this->belongsToMany('App\Category', 'posts', 'category_id', 'id')
    }

}

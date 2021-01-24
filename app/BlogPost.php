<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BlogPost extends Model
{
    protected $fillable = ['fullname', 'email', 'title', 'blog_post', 'pub_date', 'image'];
}

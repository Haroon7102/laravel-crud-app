<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // here is the model for the post
    // it is used to interact with the posts table in the database
    // it is used to create, read, update and delete posts
    // it is used to validate the data before saving it to the database
    // it is used to define the relationships between the posts and other models
    use HasFactory;

    // ✅ Add this:
    protected $fillable = [
        'title',
        'content'
    ];
}

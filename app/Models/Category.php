<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];




// Task--4
    public function posts()
    {
        return $this->hasMany(Post::class);
    }



    //Task---11
    public function latestPost()
    {
        return $this->posts()->latest()->get();
    }
}

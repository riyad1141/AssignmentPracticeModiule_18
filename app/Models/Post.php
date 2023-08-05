<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = ['title','excerpt','is_published','min_to_read'];

    protected $dates = ['deleted_at'];



// Task--4
    public function category()
    {
        return $this->belongsTo(Category::class);
    }




// Task--6
    public static function getTotalPostsForCategory($categoryId)
    {
        return self::where('category_id', $categoryId)->count();
    }



//Task---8
    public static function getSoftDeletedPosts()
    {
        return self::onlyTrashed()->get();
    }



}

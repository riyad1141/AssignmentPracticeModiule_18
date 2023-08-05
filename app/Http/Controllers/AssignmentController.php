<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    function Action(Request $request){



        // Task--- 5

        return Category::with('posts')->get();




        // Task--6

        $categoryID = $request->category_id;
        $totalPosts = Post::getTotalPostsForCategory($categoryID);
        return $totalPosts;





//        Task---7

        $posts = Post::find($request->id);
        $posts->delete();
        return $posts;





//        Task---8

                $softDeletedPosts = Post::getSoftDeletedPosts();
                return $softDeletedPosts;








//        Task---9

        $posts = Post::with('Category')->get();
        return view('app',['posts'=>$posts]);







        //Task---10

        $posts = Post::where('category_id','=',$request->id)->get();
        return $posts;




        //Task---11

                $categoryID = 1; // Replace this with the desired category ID
        $category = Category::find($categoryID);
        $latestPost = $category->latestPost();
        return $latestPost;





        //Task---12


                $categoryID = 1; // Replace this with the desired category ID
        $category = Category::find($categoryID);
        $latestPost = $category->latestPost();
        return view('post',['posts'=>$latestPost]);





    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showPostsByCategory($id)
        {
            $category = Category::find($id);
            $posts = $category->posts; 

            foreach($posts as $post){
                echo "Post ID: {$post->id} <br>";
                echo "Title: {$post->title} <br>";
                echo "Content: {$post->content} <br><hr>";
            }
            dd($posts);
    }
    public function showCategoryOfPost($id)
        {
            $post = Post::find($id);
            
            $category = $post->category; 
            echo "<h2>Category of Post: {$post->title}</h2>";
            echo "Category ID: {$category->id} <br>";
            echo "Category Name: {$category->name} <br>";
                    // dd($category);
    }

}

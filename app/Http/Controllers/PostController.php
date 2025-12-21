<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        // READ
        // $data = Post::all();
        // $data = Post::find(7);
        //$data = Post::where('id' , 7)->get();
        
        // $data = Post::where('created_at' , '2025-12-18 03:12:02')
        //             ->where('title',"Molestiae quibusdam rerum repellat officia.")
        //             ->get();

        // $data = Post::orderBy('created_at','desc')->get();
        // $data = Post::pluck('title');
        

        // CREATE 
        
        Post::create([
            'title' => 'new Post',
            'content' => "Hello world",
        ]);
        // $data = Post::where('title' , 'new Post')->value('content');

        // UPDATE 
        $post = Post::find(2);
        $post->update(['title' => 'updated title']);
        $post->update(['content' => 'hello darkness my old friend']);

        $content =$post->content;
        dd($content);


        // DELETE
        Post::find('id','6')->delete();
        $deleted = Post::find(6);

        dd($deleted);
        // return view('articles.index',[
        //     'posts' => $data
        // ]);
    }
}

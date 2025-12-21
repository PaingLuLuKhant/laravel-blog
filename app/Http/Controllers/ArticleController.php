<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{   
    
    // public function index()
    // {
    //     $data = [
    //         [ "id" => 1, "title" => "First Article" ],
    //         [ "id" => 2, "title" => "Second Article" ],
    //         ];
    //     return view('articles/index',[
    //         'articles' => $data
    //     ]);
    // }
    // public function detail($id)
    // {
    //     return "Controller - Article Detail - $id";
    // }

    public function index(){
        // READ
        // $data = Article::all();                                   // select * from Article;
        // $data = Article::find(5);                                 // SELECT * FROM articles WHERE id = 5;
        // $data = Article::where('category_id', 1)->get();             //SELECT * FROM articles WHERE category_id = 1;
        // $data = Article::where('title','sample_title')->first();    // limit one line
        // $data = Article::orderBy('id', 'asc')->get();                //SELECT * FROM articles ORDER BY id DESC;
        // $data = Article::pluck('title');                     //SELECT title FROM articles; (only specific column)
        
        // CREATE
        Article::create([
            'title' => 'New Article',
            'body' => 'This is content',
            'category_id' => '6'
        ]);

        //UPDATE
        // $article = Article::find(1);
        // $article->update(['title' => 'Updated']);

        // DELETE
        Article::find(1)->delete();

        // dd($data);
        // return view('articles.index',[
        //     'articles' => $data
        // ]);
    }
}

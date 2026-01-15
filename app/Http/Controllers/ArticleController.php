<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // READ
        $articles = Article::all();                                   // select * from Article;
        // $data = Article::find(5);                                 // SELECT * FROM articles WHERE id = 5;
        // $data = Article::where('category_id', 1)->get();             //SELECT * FROM articles WHERE category_id = 1;
        // $data = Article::where('title','sample_title')->first();    // limit one line
        // $data = Article::orderBy('id', 'asc')->get();                //SELECT * FROM articles ORDER BY id DESC;
        // $data = Article::pluck('title');                     //SELECT title FROM articles; (only specific column)

        // CREATE
        // Article::create([
        //     'title' => 'New Article',
        //     'body' => 'This is content',
        //     'category_id' => '6'
        // ]);

        //UPDATE
        // $article = Article::find(1);
        // $article->update(['title' => 'Updated']);

        // DELETE
        // Article::find(1)->delete();

        // dd($data);
        return view(
            'articles.index',
            compact('articles')

        );
    }

    public function create()
    {
        return view('articles.create');
    }
    public function store(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'title' => 'required|min:3',
            'body' => 'required|min:10',
            'category_id' => 'required|integer',
        ]);

        // Save to database
        Article::create($validated);

        // Redirect back to create page
        return redirect('/articles/create')->with('success', 'Article created successfully!');
    }
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $article->update([
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $request->category_id,
        ]);

        return redirect('/articles');
    }
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect('/articles');
    }
}

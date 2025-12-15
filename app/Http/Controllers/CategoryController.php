<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = [ 
            ['id' => 1, 'title' => 'Tech', 'description' => 'Technology news'],
            ['id' => 2, 'title' => 'Sports', 'description' => 'Sports updates'],
            ['id' => 3, 'title' => 'Health', 'description' => 'Health tips'] 
        ];

        return view('articles.index',[
            'categories' => $categories
        ]);
    }
}

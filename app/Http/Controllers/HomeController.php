<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){

        // $allCategories = ['category 1','category 2'];
        // $allCategories = DB::table('categories')->get();
           $categories = Category::all();
        //    dd($allCategories);
        // $posts = Post::when(request('category_id'), function($query){
        //     $query->where('category_id',request('category_id'));
        // })
        // ->latest()
        // ->get();

        return view('index', 
        compact('categories'));
    }
}

<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        // $categories = DB::table('categories')->get();
        // return view('pages.home', ['categories' => $categories]);
        $categories = Category::all();
        // return view('pages.home', ['categories' => $categories]);
        // get all data
        // $posts = Post::latest()->get();
        // return view('pages.home', ['categories' => $categories, 'posts' => $posts]);
        // get data by category
        // $posts = Post::where('category_id', request('category_id'))
        //     ->latest()
        //     ->get();
        // get data by category if category_id exists in the queryParams
        $posts = Post::when(request('category_id'), function ($query) {
            $query->where('category_id', request('category_id'));
        })
            ->get();

        return view('pages.home', compact('categories', 'posts'));
    }
}

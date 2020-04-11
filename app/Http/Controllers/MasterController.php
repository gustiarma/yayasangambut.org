<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;

class MasterController extends Controller
{
    public function index()
    {
        $slider = WinkPost::select('body', 'featured_image')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->limit(8)
            ->get();
        $posts = WinkPost::with('tags', 'author')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->limit(8)
            ->get();

        // return $posts;

        return view('index', [
            'slider' => $slider,
            'posts' => $posts
        ]);
    }

    public function blog($slug)
    {
        $postData =  WinkPost::with('tags', 'author')
            ->where('slug', $slug)->first();

        return view('blog.content', ['postData' => $postData]);
    }

    public function blogPage(){
        return view('blog.index');
    }
}

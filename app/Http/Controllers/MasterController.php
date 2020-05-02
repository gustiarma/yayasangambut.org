<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPage;
use Wink\WinkPost;

class MasterController extends Controller
{
    public function index()
    {
        $slider = WinkPost::select('body', 'slug', 'title', 'featured_image')
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

    public function page($slug)
    {
        $postData =  WinkPage::where('slug', $slug)->first();

        return view('blog.content', ['postData' => $postData,'type'=>'pages']);
    }
    public function blog($slug)
    {
        $postData =  WinkPost::with('tags', 'author')
            ->where('slug', $slug)->first();

        return view('blog.content', ['postData' => $postData,'type'=>'blog']);
    }

    public function blogPage()
    {
        $data =  $this->laodAllPost();

        return view('blog.index', ['posts' => $data]);
    }

    private function laodAllPost()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(12);

        return $posts;
    }
}

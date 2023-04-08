<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }
    public function about()
    {
        return view('website.about');
    }
    public function contact()
    {
        return view('website.contact');
    }
     public function blog()
    {
        
        return view('website.blog')
        ->with('posts', Post::all())
        ->with('carbon',Carbon::class);
    }

    public function show($id)
    {
        return view('website.show')
        ->with('post', Post::find($id))
        ->with('carbon',Carbon::class);
    }
}

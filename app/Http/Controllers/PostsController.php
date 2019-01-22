<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = POST::paginate(3);
        return view('blog_theme.pages.home', compact( 'posts'));
    }
    public function showPost(Post $post){
        return view('blog_theme.pages.post', compact('post'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog_theme.pages.addPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required',
            'post' => 'required'
        ]);
        Post::create([
            'title' => request('title'),
            'post' => request('post'),
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(post $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(post $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $posts)
    {
        //
    }
}

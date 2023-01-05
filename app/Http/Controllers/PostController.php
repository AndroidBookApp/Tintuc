<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\detail_post;
use App\Models\image;
use App\Http\Resources\PostResource;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CookieController;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post_new = post::orderBy('create_at','desc')->first();
        $post_new = $post_new->toArray();
        // dd($post_new);
        $posts = post::all();
        return view('non-static-layout.home',[
            'posts' => $posts,
            'post_new' => $post_new

            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new post;
        $post->name = $request->name;
        $post->rootImage = $request->rootImage;
        $post->shortDescription = $request->shortDescription;
        $post->category_id = $request->category_id;
        $post->save();
        $cookie = new CookieController();
        return redirect($cookie->get('url'))->with('message', 'thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = post::findOrFail($id);
        $post = $post->toArray();
        $detail = detail_post::orderBy('id','desc')->where('post_id',$id)->first();
        $detail = $detail->toArray();
        // dd($detail);
        $images = image::query()->where('post_id',$id)->get();
        $images = $images->toArray();
        return view('non-static-layout.detail', [
            'post' => $post,
            'detail' => $detail,
            'id' =>$id,
            'images' => $images
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {  
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = post::find($id);
        $post->name = $request->name;
        $post->rootImage = $request->rootImage;
        $post->shortDescription = $request->shortDescription;
        $post->category_id = $request->category_id;
        $post->save();
        $cookie = new CookieController();
        return redirect($cookie->get('url'))->with('message', 'update thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        post::find($id)->delete();
        $cookie = new CookieController();
        return redirect($cookie->get('url'))->with('message', 'xóa thành công');
    }
}

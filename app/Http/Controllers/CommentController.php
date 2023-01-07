<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\CookieController;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
        $comment = new comment();
        $comment->post_id = $request->id;
        $comment->content = $request->input('rep_text');
        $comment->repcomment = $request->input('idcmt');
        $cookie = new CookieController();
        $id = $cookie->get('user');
        $comment->user_id = $id;
        $comment->save();
        return redirect($cookie->get('url'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment $comment)
    {
        //
    }

    public function listing($post)
    {
        $comment = comment::orderBy('created_at', 'desc')->where('post_id', $post)->where('repComment', null)->get();
        return $comment;
    }

    public static function getRepComment($id)
    {
        $list_rep = comment::orderBy('created_at', 'desc')->where('repComment', $id)->get();
        return $list_rep;
    }
}

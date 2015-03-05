<?php

class PostController extends \BaseController
{

    /**
     * Display a listing of the resource.
     * GET /post
     *
     * @return Response
     */
    public function getIndex()
    {
        return View::make('posts.index', ['posts' => Post::all()]);
    }

    public function getView($id)
    {
        // この状態だと $id が URL に付加されてない場合は ErrorException が発生する
        // $id あってもなくてもよい場合は getView($id = null) とすればよい
        // Model::findOrFail を使うとモデルが見つからなかった場合
        // ModelNotFoundException を発生させる
        return View::make('posts.view', Post::findOrFail($id));
    }

    /**
     * Show the form for creating a new resource.
     * GET /post/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /post
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /post/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /post/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /post/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /post/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
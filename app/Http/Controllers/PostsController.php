<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::all();
        $posts = Post::orderBy('created_at','desc')->get();
        //$posts = DB::select('select *from posts;');
        return view('posts.index')->with('posts',$posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);

        $post = new Post;
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->user_id=Auth::user()->id;
        $post->created_at=Carbon::now()->toDateTimeString();
        $post->save();

        return redirect('/posts')->with('success','Posted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);

        $post = Post::find($id);
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->user_id=Auth::user()->id;
        $post->created_at=Carbon::now()->toDateTimeString();
        $post->save();

        return redirect('/posts')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // TODO delete function @PostsController
    }

    // post search
    public function search(Request $request)
    {
        $key = Str::lower(trim($request->get('query')));

        $posts = Post::query()
            ->where('posts.title', 'like', "%{$key}%")
            ->join('users', function ($join) {
                $join->on('posts.user_id', '=', 'users.id');
            })
            ->orwhere('users.name', 'like', "%{$key}%")
            ->orderBy('posts.created_at', 'desc')
            ->get();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Category;
use App\Post;
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
        return view('admin.post.index')->with('posts',Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create')->with('categories',Category::all())->with('tags',Tag::all());
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
            'title'=>'required|max:100',
            'image'=>'required|image',
            'category_id'=>'required',
            'content'=>'required'
        ]);

        $image=$request->image;

        $name=time().$image->getClientOriginalName();
        $image->move('upload/posts',$name);

        $post=Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'image' => 'upload/posts/'.$name,
            'slug'=> str_slug($request->title)

        ]);

        $post->tags()->attach($request->tags);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.post.edit')->with('post',Post::find($id))
            ->with('categories',Category::all())
            ->with('tags',Tag::all());
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
            'title'=>'required|max:100',
            'category_id'=>'required',
            'content'=>'required'
        ]);

        $post=Post::find($id);

        if($request->hasFile('image'))
        {
            $image=$request->image;

            $name=time().$image->getClientOriginalName();
            $image->move('upload/posts/',$name);
            $post->image='upload/posts/'.$name;

        }

        $post->title=$request->title;
        $post->content=$request->content;
        $post->category_id=$request->category_id;

        $post->save();

        $post->tags()->sync($request->tags);

        return redirect()->route('Posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);

        $post->delete();

        return redirect()->back();
    }

    public function deleted()
    {
        return view('admin.post.deleted')->with('deleted',Post::onlyTrashed()->get());
    }

    public function deletePermanently($id)
    {
        $post=Post::onlyTrashed()->where('id',$id)->first();

        $post->forceDelete();

        return redirect()->back();
    }

    public function restore($id)
    {
        $post=Post::onlyTrashed()->where('id',$id)->first();

        $post->restore();

        return redirect()->back();
    }
}

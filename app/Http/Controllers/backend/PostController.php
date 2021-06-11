<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Room::where('user_id',Auth::user()->id)->get();
        return view('backend.pages.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Room();
        $post->location = $request->location;
        $post->type = $request->type;
        $post->price = $request->price;
        $post->size = $request->size;
        $post->for = $request->for;
        $post->description = $request->description;
        $post->images = $request->images;
        $post->owner_email = $request->owner_email;
        $post->owner_phone = $request->owner_phone;
        $post->status = $request->status;
        // for feature-image
        if($request->hasFile('image_feature')){
            $file = $request->file('image_feature');
            $newName = time().$file->getClientOriginalName();
            $file->move('images/',$newName);
            $post->image_feature = 'images/'.$newName;
        }
        $post->save();
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
        $post = Room::find($id);
        return view('backend.pages.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $post = Room::find($id);
        return view('backend.pages.edit',compact('post'));
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
        $post = Room::find($id);
        $post->location = $request->location;
        $post->type = $request->type;
        $post->price = $request->price;
        $post->size = $request->size;
        $post->for = $request->for;
        $post->description = $request->description;
        $post->images = $request->images;
        $post->owner_email = $request->owner_email;
        $post->owner_phone = $request->owner_phone;
        $post->status = $request->status;
        // for feature-image
        if($request->hasFile('image_feature')){
            $file = $request->file('image_feature');
            $newName = time().$file->getClientOriginalName();
            $file->move('images/',$newName);
            $post->image_feature = 'images/'.$newName;
        }
        $post->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Room::find($id);
        $post->delete();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::orderby('id','desc')->paginate(8);
        return view('frontend.pages.index',compact('rooms'));
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
        $room = new Room();
        $room->location = $request->location;
        $room->type = $request->type;
        $room->price = $request->price;
        $room->size = $request->size;
        $room->for = $request->for;
        $room->description = $request->description;
        $room->images = $request->images;
        $room->owner_email = $request->owner_email;
        $room->owner_phone = $request->owner_phone;
        $room->status = $request->status;
        // for feature-image
        if($request->hasFile('image_feature')){
            $file = $request->file('image_feature');
            $newName = time().$file->getClientOriginalName();
            $file->move('images/',$newName);
            $room->image_feature = 'images/'.$newName;
        }
        $room->user_id = $request->user()->id;
        $room->save();
         session()->flash('success','Category created successfully');
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
            $comments = Comment::where('post_id',$id)->get();
            $room = Room::find($id);
            return view('frontend.pages.show',compact('room','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    public function search(Request $request)
    {
        $location = $_GET['location'];
        $type = $_GET['type'];
        $min_price = $_GET['min_price'];
        $max_price = $_GET['max_price'];
        if($min_price==null AND $max_price==null) {
            $min_price = Room::min('Price');
            $max_price = Room::max('Price');
        }
        
        $for = $_GET['for'];
        $rooms = Room::where('location',$location)
                    ->where('type',$type)
                    ->where('price','>=',$min_price)
                    ->where('price','<=',$max_price)
                    ->where('for',$for)->get();
                    return view('frontend.searchPost',compact('rooms'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        
        return view('backend.pages.profile');
    }
    public function update(UserProfileRequest $request)
    {
        $user = auth()->user();
            if($request->hasFile('image')){
                $file = $request->file('image');
                $newName = time().$file->getClientOriginalName();
                $file->move('images/',$newName);
                $image = 'images/'.$newName;
            }
            else{
                $image =  Auth::user()->image;
            }
         
        $user->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'image' => $image,
            'address' => $request->address
        ]);
        return redirect()->back();
         


        // $data = new User();
        // $data->name = $request->name;
        // $data->email = $request->email;
        // $data->phone = $request->phone;
        // if($request->hasFile('image')){
        //     $file = $request->file('image');
        //     $newName = time().$file->getClientOriginalName();
        //     $file->move('images/',$newName);
        //     $data->image = 'images/'.$newName;
        // }
        // $request->get('password');
        // $data->save();
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Listener;
use Hash;
use Storage;
use Auth;
use Validator;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // dd($request->all());
        // dd(uniqid($request->file('img_path')).".".$request->file('img_path')->getClientOriginalExtension());
        // $path = Storage::putFileAs(
        //     '/images', $request->file('img_path'), $request->file('img_path')->getClientOriginalName()
        // );
        // dd($path);
        // $validate = $request->validate([
        //     'fname' => 'required|min:4',
        //     'lname' => 'required|alpha|min:1',
        //     'email' => 'required|email'
        // ]);
        // dd($validate);
        $rules = [
            'fname' => 'required|min:4',
            'lname' => 'required|alpha|min:1',
            'email' => 'required|email',
            'img_path' => 'extensions:jpg,png',
            'password' => 'min:6'

        ];
        $messages = [
            'lname.required' => 'maglagay ng last name',
            'required' => 'ito ay kailangan',
            'extensions' => 'jpg png type only',
            'email' => 'mali ang format'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
 
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $path = Storage::putFileAs(
            'public/images', $request->file('img_path'), $request->file('img_path')->hashName()
        );
        $user = new User();
        $user->name = $request->fname . " " . $request->lname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        
        $listener = new Listener();
        $listener->fname = $request->fname;
        $listener->lname = $request->lname;
        $listener->address = $request->address;
        $listener->img_path = $path;
        $listener->user_id = $user->id;
        $listener->save();
        // dd($user, $listener);
        Auth::login($user);
        return redirect()->route('user.profile');
    }
    public function profile() {
        // dd(Auth::user()->id);
        $user = Auth::user();
        $listener = Listener::where('user_id', $user->id)->first();
        // dd($listener);
        return view('user.profile', compact('user', 'listener'));
    }
}
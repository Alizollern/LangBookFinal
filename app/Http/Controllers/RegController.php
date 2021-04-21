<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\upload;
use Illuminate\Support\Facades\DB;

class RegController extends Controller
{
    public function addData(Request $request)
    {
    	$user = new User;
    	$user->name=$request->name;
    	$user->email=$request->email;
    	$user->password=$request->password;
    	$user->cpassword=$request->cpassword;
   		$user->save();
   		return view('main');
    }

    public function loginData(Request $req){
    	$login = $req->usersname;
    	$password = $req->passwords;
  return view('account',['data'=>DB::table('users')->where('name',$login)->get()]);
    }
    public function uploadFile(Request $request){
    	 $name = $request->file('book')->getClientOriginalName();
    	// $req ->file('book')->storeAs('public/images/',$name);
    	// $post = new Posts();
    	// $post->name = $name;
    	// $post->save();
    	// return redirect()->back();
    	$file = $request->file('book')->store('data');
    	$post = new upload();
    	$post ->name = $name;
    	$post ->image = $file;
     	$post->save();
    	return view('main');
    }
}

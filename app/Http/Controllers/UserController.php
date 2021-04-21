<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\upload;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Stroage;
class UserController extends Controller
{
    public function dowload(Request $req,$file){
    	return response()->download(public_path($file));
    }

    public function view($id){
    return view('read',['data'=>DB::table('uploads')->where('id',$id)->get()]);
    }
}

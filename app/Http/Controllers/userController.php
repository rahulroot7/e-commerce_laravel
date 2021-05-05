<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\facades\Hash;

class userController extends Controller
{
	function login(Request $req)
    {
	   $user =  User::where(['email'=>$req->email])->first();
	   if(!$user || !Hash::check($req->password,$user->password))
	   {
	   		return "user and password not matched";
	   }
	   else{
	   	$req->session()->put('user',$user);
	   		return redirect("/");
	   }
    }
}

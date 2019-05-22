<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class eachMapController extends Controller
{
    public function each(){
    	$users = User::all();
    	$users->each(function($user){
    		echo $user->name;
    		echo '<hr>';
    	});
    }

    public function map(){
    	$users = User::all();
    	return $users->map(function($user){
    		//return ['name'=> $user->name,'email'=>$user->email];
    		return $user->only('name','id');
    	});
    }
}

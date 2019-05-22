<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class popPullForgetEveryController extends Controller
{
    public function pop(){
    	$collection = collect([1, 2, 3, 4, 5]);
        $collection->pop();
        return $collection->all();
    }

    public function pull(){
    	$users = User::all();

    	$users->pull('email');

		// 'Desk'

		return $users;

    }

    public function forget(){
    	$collection = collect(['name' => 'taylor', 'framework' => 'laravel']);

		$collection->forget('name');

		return $collection->all();
    }

    public function every(){
    	$users = User::all();
    	$result =$users->every(function($user){
    		return $user->name == '';
    	});

    	dd($result);
    }
}



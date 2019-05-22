<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class shortController extends Controller
{
    public function shortby(){
    	$users = User::all();
    	return $users->sortBy('name')->values();
    }

    public function sortByDesc(){
    	$users = User::all();
    	return $users->sortByDesc('name')->values();
    }

    public function sortKeys(){
    	$users = User::all();
    	$collection = collect($users->first());
    	return $collection->sortKeys();
    	
    }
}

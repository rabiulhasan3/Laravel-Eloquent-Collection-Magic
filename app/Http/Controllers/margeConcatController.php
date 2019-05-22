<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class margeConcatController extends Controller
{
    public function merge(){
    	$user = User::first();
    	$collection = collect($user);
    	return $collection->merge([
    		'age' => 23,
    		'email' => 'xhasan.me@gmail.com'
    	]);

    }

    public function concat(){
    	$collection = collect(['John Doe','name'=>'Rabiul Hasan','Arif']);

$concatenated = $collection->concat(['Jane Doe'])->concat(['name' => 'Johnny Doe','shubo']);

 return $concatenated->all();

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class whereController extends Controller
{
    public function where(){
    	$user = User::where('id',1)->first();
    	return $user;
    }

    public function orWhere(){
    	$users = User::where('id','<',10)->orwhere('name','Prof. Shane Breitenberg')->get();
    	return $users;
    }

    public function whereBetween(){
    	$users = User::whereBetween('id',[1,5])->get();
    	return $users;
    }

    public function whereNotBetween(){
    	$users = User::all();
    	return $users->whereNotBetween('id',[1,5])->take(10)->chunk(2);
    }

    public function where_in(){
    	$users = User::all();
    	return $users->whereIn('id',[1,5]);
    }

    public function whereNull(){
    	$users = User::whereNull('remember_token')->get();
    	return $users;
    }

    public function WhereNotNull(){
    	$users = User::whereNotNull('remember_token')->get();
    	return $users;
    }

    public function WhereNotIn(){
    	$users = User::whereNotIn('id',[1,2,3])->get();
    	dd($users->contains('email','obrakus@example.net'));
    	// foreach($users as $user){
    	// 	if($user->email == 'obrakus@example.net'){
    	// 		echo 'Hello world';
    	// 	}
    	// }
    }

    public function WhereDate(){
    	$users = User::whereDate('created_at',date('Y-m-d'))->get();
    	return $users;
    }

    public function WhereMonth(){
    	$users = User::whereMonth('created_at','05')->get();
    	return $users;
    }

    public function WhereDay(){
    	$users = User::whereDay('created_at','21')->get();
    	return $users;
    }

    public function WhereYear(){
    	$users = User::whereYear('created_at','2019')->get();
    	return $users;
    }

    public function currentMonth(){
    	$users = User::whereMonth('created_at',date('m'))->whereYear('created_at',date('Y'))->get();
    	return $users;
    }

    public function whereTime(){
    	$users = User::whereTime('created_at','09:44:41')->get();
    	return $users;
    }

    public function whereColumn(){
    	$users = User::whereColumn('name','email')->get();
    	return $users;
    }

    public function orderBy(){
    	$users = User::orderBy('name','desc')->get();
    	return $users;
    }

    public function pluck(){
    	$user = User::where('id',1)->pluck('name');
    	return $user;
    }

      public function delete(){
    	$user = User::where('id',1)->delete();
    	return $user;
    }

}

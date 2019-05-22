<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class groupBycontroller extends Controller
{
    public function groupby(){
    	// $users = User::all();
    	// //return $users->groupBy('isAdmin');
    	// return $users->groupBy(function($item,$key){
    	// 	 return substr($item['email'], -4);
    	// });

    	$data = collect([
		    10 => ['user' => 1, 'skill' => 1, 'roles' => ['Role_1', 'Role_3']],
		    20 => ['user' => 2, 'skill' => 1, 'roles' => ['Role_1', 'Role_2']],
		    30 => ['user' => 3, 'skill' => 2, 'roles' => ['Role_1']],
		    40 => ['user' => 4, 'skill' => 2, 'roles' => ['Role_2']],
		]);

		return $data->groupBy(['skill',function($item){
					return $item['roles'];
				}]);

    }
}

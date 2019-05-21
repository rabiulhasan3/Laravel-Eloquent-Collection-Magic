<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eloquentMagicCollectionController extends Controller
{
    public function take(){
    	$items = collect(['a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5]);
    	return $items->take(3);
    }

    public function chunk(){
    	$items = collect(['a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5]);
    	$values = $items->chunk(3);
    	foreach($values as $key=>$value){
    		foreach($value as $index=>$single_value){
    			echo $index. ' => '. $single_value;
    			echo '<br>';
    		}
    	}
    }
}

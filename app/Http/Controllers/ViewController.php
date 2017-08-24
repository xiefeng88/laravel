<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index() {
    	$data = [
    		'score' => 59,
    		'num'	=>10,
    		'list'	=>[
    			'list1',
    			'list2',
    			'list3',
    			'list4',
    		],
    	];
    	return view("my_laravel",compact('data'));
    }
}

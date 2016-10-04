<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


//use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
    public function index() 
	{
		return view('pages.home');
	}
	
	public function about() {
		return View::make('pages.about');
	}
	
	public function test() {
		return View::make('test.about');
	}
        
          public function create()
        {
            return view('posts.create');
        }
	
}


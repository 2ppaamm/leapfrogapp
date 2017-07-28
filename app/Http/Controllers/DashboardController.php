<?php

namespace leapfrog\Http\Controllers;

use Illuminate\Http\Request;
use leapfrog\Blog;
use leapfrog\Video;

class DashboardController extends Controller
{
	/**
	 * Login
	 */
	public function login()
    {
        return \App::make('auth0')->login();
    }
	/**
	* GET /dashboard
	*/
    public function index() {
    	$videos = Video::with('author')->get();
		$blogs = Blog::with('author')->get();		
    	return view('welcome')->with(['blogs' => $blogs, 'videos' => $videos]);
	}
}

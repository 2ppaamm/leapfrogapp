<?php

namespace leapfrog\Http\Controllers;

use Illuminate\Http\Request;

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
        return 'Here are all dashboard info...';
	}
}

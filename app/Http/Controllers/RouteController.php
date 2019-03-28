<?php

namespace AssetManagement\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class RouteController extends Controller
{
    public function index(){
    	if(Auth::user() == null){
    		return view('auth.login');
    	}
    }
}

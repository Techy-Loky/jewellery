<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class PageController extends Controller
{

	public function index(){
		return view('page.welcome');
	}

}
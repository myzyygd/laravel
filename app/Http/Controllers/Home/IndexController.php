<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function index(){
    	$name = "小明";
    	return view('Home/Home')->with('name',$name);
    }
}

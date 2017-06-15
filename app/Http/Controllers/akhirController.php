<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class akhirController extends Controller

{

	public function __construct()
	{
		$this->middleware('auth');
	}
	
    public function index()
    {
    $k = "kuy";
    return  "nama saya adalah : ".$k;
}
} 
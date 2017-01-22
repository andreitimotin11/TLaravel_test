<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class Core extends Controller
{
	
	public function __construct()
	{
		//$this->middleware('mymiddle');
	}
	
	//list materials
	public function getArticles()
	{
		DB::table('articles');
	}
	
	//material
	public function getArticle($id)
	{
		
		echo 'Ответ - ' . $id;
	}
}

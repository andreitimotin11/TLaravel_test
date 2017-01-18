<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Response;

class AboutController extends Controller
{
	//

	public function show()
	{
		if (view()->exists('default.about')) {
		/*
			$view = view('default.about')->withTitle('Hello world!')->render();
			return (new Response($view))->header('Content-Type','newType' );
			return response()->json(['name'=> 'Hello', 'name2'=> 'Hello2']);*/
			return response()->view('default.about', ['title' => 'Hello World']);
		}
		abort(404);
	}

}

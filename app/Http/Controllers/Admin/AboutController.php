<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Response;

class AboutController extends Controller
{
	//

	public function show()
	{
		if (view()->exists('default.about')) {
			$articles = DB::select("SELECT * FROM `articles` WHERE id = :id", ['id' => 2]);
			dump($articles);
			return view('default.about')->withTitle('Hello World!');

		}
		abort(404);
	}

}

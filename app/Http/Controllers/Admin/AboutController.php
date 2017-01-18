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
			$articles = DB::select("SELECT * FROM `articles` ");
			DB::insert('INSERT INTO `articles` (`name`, `text`) VALUES (?,?)', ['test 1', 'TEXT']);
			dump($articles);
			return view('default.about')->withTitle('Hello World!');
			$result = DB::update('UPDATE `articles` SET `name` = "TEST 2"' );

		}
		abort(404);
	}

}

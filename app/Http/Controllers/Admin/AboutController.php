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
			//DB::insert("INSERT INTO `articles` (`name`, `text`) VALUES (?, ?)", ['test1', 'TEXT']);
			$articles = DB::select('SELECT * FROM `articles` ');
			//$result = DB::update('UPDATE `articles` SET `name` = ? WHERE `id`= ?', ['22222', 5]);
			$result = DB::delete('DELETE FROM `articles` WHERE id = ?',[6]);

			dump($result);
			dump($articles);
			return view('default.about')->withTitle('Hello World!');
		}
		abort(404);
	}

}

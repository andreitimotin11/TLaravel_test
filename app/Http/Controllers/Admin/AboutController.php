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
			return redirect('/');

		}
		abort(404);
	}

}

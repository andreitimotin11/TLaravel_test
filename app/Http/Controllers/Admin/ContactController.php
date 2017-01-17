<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class ContactController extends Controller
{

	public function show(Request $request, $id = false)
	{

		if($request->is('contact')) {
			echo '<h1 style="margin-top:100px">'.$request->path().'</h1>';
		}
		print_r($request->all());
		if($request->isMethod('POST')){


		$request->flashExcept('name', 'site');
			return redirect()->route('contact');

		}
		return view('default.contact', ['title' => 'Contacts']);
	}
	
}

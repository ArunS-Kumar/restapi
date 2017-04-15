<?php

namespace Restapi\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TodoController extends Controller
{

	public function getTodo()
	{
		dd('hi');
	}

	public function postTodo(Request $request)
	{
		dd($request);
	}

}
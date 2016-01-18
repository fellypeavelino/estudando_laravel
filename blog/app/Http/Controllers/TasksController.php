<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class TasksController extends Controller
{
	public function create()
	{
		return view('tasks.create');
	}
	
	public function store(Request $request)
	{
		$input = $request->all();

		Task::create($input);

		return redirect()->back();
	}	
	//http://www.sitepoint.com/crud-create-read-update-delete-laravel-app/
}

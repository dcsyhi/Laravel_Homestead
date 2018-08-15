<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FooController extends Controller
{
	public function foo2(){
		return view('foo.foo2', [
			'title' => 'Foo2',
			'body' => 'My First Laravel.'
		]);
	}
	public function foo3()
	{
		$user = User::find(1);
		return view('foo.foo3', [
			'user' => $user
		]);
	}
	public function foo4()
	{
		return view('foo.foo4');
	}
}

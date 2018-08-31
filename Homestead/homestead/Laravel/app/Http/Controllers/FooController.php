<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

/**
 * Class FooController
 * @package App\Http\Controllers
 */
class FooController extends Controller
{
    /**
     * @return mixed
     */
    public function foo2()
    {
        return view('foo.foo2', [
            'title' => 'Foo2',
            'body' => 'My First Laravel.'
        ]);
    }

    /**
     * @return mixed
     */
    public function foo3()
    {
        $user = User::find(1);
        return view('foo.foo3', [
            'user' => $user
        ]);
    }

    /**
     * @return mixed
     */
    public function foo4()
    {
        return view('foo.foo4');
    }
}

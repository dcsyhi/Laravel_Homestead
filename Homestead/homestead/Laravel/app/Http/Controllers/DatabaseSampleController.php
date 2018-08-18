<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseSampleController extends Controller
{
    public function index(Request $request){
        if (isset($request->id)){
            $param = ['id' => $request->id];
            $items = DB::select('select * from people where id = :id', $param);
        } else {
            $items = DB::select('select * from people');
        }
        return view('db_sample.index',['items' => $items]);
    }

    public function ses_get(Request $request){
        $sesdata = $request->session()->get('msg');
        return view('post_sample.session', ['session_data' => $sesdata]);
    }

    public function ses_put(Request $request){
        $msg =$request->input;
        $request->session()->put('msg', $msg);
        return redirect('enma/session');
    }
}

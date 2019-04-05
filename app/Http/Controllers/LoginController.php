<?php

namespace Expert\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{


    public function check(Request $request)
    {
        $data = DB::table('user')
            ->select($request->email)
            ->where('password'==$request->password)
            ->get();

        if (!empty($data))
                return View::make('Auth.login')->with('success');
            else return View::make('Auth.login')->with('error');

    }


}

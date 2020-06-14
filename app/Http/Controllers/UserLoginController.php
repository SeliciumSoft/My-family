<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    //
    public function auth(Request $request)
    {
        dd($request);
        return view('pages.user');
    }

}

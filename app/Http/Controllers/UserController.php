<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('pages.user')->with([
            'users'=>$users
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.about');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'email' => 'required| unique:users,email',
            'password' => 'required | min:8',
            'birthdate' => 'required',
            'confirm_password' => 'required',
        ]);


        $user = new User([
            'email' => $request['email'], // or $request->name
            'password' => Hash::make($request['password'] ) ,
            'birthDate' => $request['birthdate'],

        ]);
        $user->save();
        return $this->index();
    }

    public function auth(Request $request)
    {
        $user = User::where('email', '=', $request['email'])->first();

        if($user != null){

            if (Hash::check($request['password'], $user->password)) {
                // The passwords match...
                return Redirect::route('user.show', $user);

            }
            else{
                return Redirect::back()->withErrors('wrong password');
            }
    }
        else{
            return Redirect::back()->withErrors('No account match with this email');
        }



    }
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     *
     */

    public function show(User $user)
    {
        //
        return view('pages.user')->with([
            'users'=>$user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}

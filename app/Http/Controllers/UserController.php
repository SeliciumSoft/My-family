<?php

namespace App\Http\Controllers;
use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


    }

    public function profile($usr){
        return view('pages.user')->with([
            'email'=> $usr->user()->email,
            'firstName'=> $usr->user()->firstName,
            'lastName'=> $usr->user()->lastName,


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
            'first-name' => 'required',
            'last-name'=>'required',
            'password' => 'required | min:8',
            'birthdate' => 'required',
            'confirm_password' => 'required',
        ]);


        $user = new User([
            'firstName' => $request['first-name'],
            'lastName'=>$request['last-name'],
            'email' => $request['email'], // or $request->name
            'password' => Hash::make($request['password'] ) ,
            'birthDate' => $request['birthdate'],

        ]);
        $user->save();
        return $this->auth($request);
    }

    public function auth(Request $request)
    {


        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::guard('user')->attempt(['email' => $request['email'], 'password' => $request['password']], $request->get('remember'))) {

            return $this->show(Auth::guard('user'));
        }

        return back()->withInput($request->only('email', 'remember'))->withErrors('check your email or password');



    }


    /**
     * Display the specified resource.
     *
     * @param  \App\User
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */

    public function show($u)
    {
        if (Auth::guard('user')->user() == null){
            return view('index');
        }
        elseif ( gettype($u) != 'object' && ($u == Auth::guard('user')->user()->firstName ||  $u == Auth::guard('user')->user()->id) ){

            return view('pages.user' )->with([
                'firstName' => Auth::guard('user')->user()->firstName,
                'lastName' => Auth::guard('user')->user()->lastName,
                'email' => Auth::guard('user')->user()->email
            ]);

        }
        else{
            return view('pages.user')->with([
                'firstName' => Auth::guard('user')->user()->firstName,
                'lastName' => Auth::guard('user')->user()->lastName,
                'email' => Auth::guard('user')->user()->email
            ]);
        }

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $user)
    {
        //
        return view('pages.edit-user')->with(
            [
                'user'=>$user
            ]
        );

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
        $user = User::find($user->id);

        $user->name = 'New Flight Name';

        $user->save();

        $this->validate($request, [
            'email' => 'required| unique:users,email',
            'first-name' => 'required',
            'last-name'=>'required',
            'password' => 'required | min:8',
            'birthdate' => 'required',
            'confirm_password' => 'required',
        ]);


        $user = new User([
            'firstName' => $request['first-name'],
            'lastName'=>$request['last-name'],
            'email' => $request['email'], // or $request->name
            'password' => Hash::make($request['password'] ) ,
            'birthDate' => $request['birthdate'],

        ]);
        $user->save();
        return $this->auth($request);

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

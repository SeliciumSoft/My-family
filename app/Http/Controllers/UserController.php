<?php

namespace App\Http\Controllers;
use App\Admin;
use App\User;
use App\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
     * @param \Illuminate\Http\Request $request
     * @param int $user_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
 /*   public function update_avatar(Request $request, int $user_id){

        if ($request->hasFile('avatar')){

            $imgStore = $request->file('avatar')->store('/public');
            $imgName = explode('/',$imgStore);
            $imgUrl= end($imgName);

        }

        else{
            $imgUrl = Null;
        }

        $update_avatar = UserDetails::updateOrCreate(
            ['user_id' => $user_id],
            [
                'profile_pic' => $imgUrl,
            ]
        );

        return $this->update_user($request, $user_id);


    }*/
    public function update_user(Request $request, int $user_id)
    {
        $user = User::find($user_id);

        $user->firstName = $request['first_name'];
        $user->lastName = $request['last_name'];
        $user->birthDate = $request['birthdate'];
        $user->email = $request['email'];

        $currently_working = $request['current-work'] ? 1 : 0;
        $currently_studying = $request['current-education'] ? 1 : 0;
        $gender = $request['male'] ? 'male' : 'female' ;

        if ($request->hasFile('avatar')){
            $imgStore = $request->file('avatar')->store('/public/profile_pics');
            $imgName = explode('/',$imgStore);
            $imgUrl= end($imgName);

        }

        else{
            $imgUrl = Null;
        }


        $user_details = UserDetails::updateOrCreate(
            ['user_id' => $user_id],
            [
                'phone' => $request['phone'],
                'mobile' => $request['mobile'],
                'website' => $request['website'],
                'education' => $request['education'],
                'country' => $request['country'],
                'gender' => $gender,
                'education_current' => $currently_studying,
                'education_country' => $request['education-country'],
                'highest_degree' => $request['highest-degree'],
                'education_university' => $request['organization'],
                'work' => $request['work'],
                'work_current' => $currently_working,
                'company' => $request['company'],
                'work_country' => $request['work-country'],
                'fb' => $request['fb'],
                'twitter' => $request['tw'],
                'instagram' => $request['instagram'],
                'nationality' => $request['nationality'],
                'about' => $request['about'],
                'relationship_status' => $request['relation'],
                'profile_pic' => $imgUrl,
            ]);


        $user->save();

      return $this->show($user);


    }
    public function update(Request $request, User $user)
    {
        //
 /*       $user = User::find($user->id);

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
        return $this->auth($request);*/

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

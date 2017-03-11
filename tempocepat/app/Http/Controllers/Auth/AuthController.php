<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

//Add These three required namespace

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
// use App\User;

// use Auth;
// use Socialite;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);

        $this->redirectPath = route('/');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
    	/*
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        */

		$user = User::create([
		'name' => $data['name'],
		'email' => $data['email'],
		'password' => bcrypt($data['password']),
		]);

		//-------------------------------------
		$memberRole = Role::where('name', 'member')->first();
		$user->attachRole($memberRole);
		//-------------------------------------

		return $user;

    }

///---
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    
     public function handleProviderCallback($provider)
    {
     //notice we are not doing any validation, you should do it

        $user = Socialite::driver($provider)->user();
         
        // stroing data to our use table and logging them in
        $data = [
            'name' => $user->getName(),
            'email' => $user->getEmail()
            // ,
            // 'facebook_id' => $user->getId(),
            // 'avatar' => $user->getAvatar()
        ];
     
        Auth::login(User::firstOrCreate($data));

        //after login redirecting to home page
        return redirect($this->redirectPath());
    }
//---/

    /*//++++++++++++++++++++++++++++++++++++++++++++++++++++++
    protected $redirectPath = '/';
 
    /*
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     /
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }
 
    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     /
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
        } catch (Exception $e) {
            return redirect('auth/facebook');
        }
 
        $authUser = $this->findOrCreateUser($user);
 
        Auth::login($authUser, true);
 
        return redirect()->route('/');
    }
 
    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $facebookUser
     * @return User
     /
    private function findOrCreateUser($facebookUser)
    {
        $authUser = User::where('facebook_id', $facebookUser->id)->first();
 
        if ($authUser){
            return $authUser;
        }
 
        return User::create([
            'name' => $facebookUser->name,
            'email' => $facebookUser->email,
            // 'password' => $facebookUser->password,
            'facebook_id' => $facebookUser->id,
            'avatar' => $facebookUser->avatar
        ]);
    }
    //++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\NotifyNewUser;
use App\Notifications\WelcomeUser;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }

    public function findOrCreateUser($user, $provider){

        $authUser = User::where('provider_id', $user->id)->first();
        if($authUser){
            $authUser->update(['profile_photo' => $user->avatar_original]);
            return $authUser;
        }
        $NewUser =  User::create([
            'name'      => $user->name,
            'email'     => $user->email,
            'profile_photo' => $user->avatar_original,
            'provider'  => strtoupper($provider),
            'provider_id'   => $user->id,
            'active' => $user->email == env('USER_ROOT_MAIL') ? true : null
        ]);

        $NewUser->notify(new WelcomeUser($NewUser));

        $Director = User::where('director', true)->first();
        if($Director){
            $Director->notify(new NotifyNewUser($NewUser));
        }

        return $NewUser;

    }
}


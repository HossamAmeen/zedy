<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Lang;
use Cookie;
use Auth;
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

    use AuthenticatesUsers {
        logout as performLogout;
    }
    protected $username;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->username = $this->findUsername();
    }
    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);
        $login = request()->input('login');
 
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';

        $credentials = $request->only($fieldType, 'password');
        $remember_me = false;
        if($request->remember_me){
            Cookie::queue('user_name', $request->login,  1440);
            Cookie::queue('password',  $request->password,  1440);
            $remember_me = true;
        }
        else{
            Cookie::queue('user_name', $request->login, -1);
            Cookie::queue('password',  $request->password, -1);
            $remember_me = false;
        }
        if (Auth::attempt($credentials, $remember_me )) {
            return redirect($this->redirectTo);
        }
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
    public function findUsername()
    {
        $login = request()->input('login');
 
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';
 
        request()->merge([$fieldType => $login]);
        
        return $fieldType;
    }
    protected function sendFailedLoginResponse(Request $request)
    {
        if ( ! User::where('user_name', $request->login)->first() ) {
            return redirect()->back()
                ->withInput( $request->all())
                ->withErrors([
                    $this->username() => Lang::get('auth.user_name'),
                 
                ]);
        }

        if ( ! User::where('user_name', $request->user_name )->where('password', bcrypt($request->password))->first() ) {
            return redirect()->back()
                ->withInput(
                    $request->all()
                    
                    )
                ->withErrors([
                    'password' => Lang::get('auth.password'),
                ]);
        }
    }
    /**
     * Get username property.
     *
     * @return string
     */
    public function username()
    {
        return $this->username;
    }
    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect()->route('login');
    }
}

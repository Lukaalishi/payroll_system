<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    protected $redirectTo = '/dashboard/main';
//    protected $logout = 'users.index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.index');
    }

    public function username()
    {
        $login = request()->input('username');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'username' : 'username';
        request()->merge([$field => $login]);
        return $field;
    }

//    public function authenticated(Request $request, $user)
//    {
//        $userid = User::where('users.id', '=', Auth::id());
//        if (Auth::attempt(['username' => $request->input('username'), 'password' => Hash::make($request->input('password'))])) {
//            // Authentication passed......................................
//            Session::put('userid', $userid);
//            return redirect()->intended($this->redirectTo);
//        }
//
//
//    }

    public function authenticate()
    {
        if (Auth::attempt(['username' => request()->input('username'), 'password' => Hash::make(request()->input('password'))])) {
            // Authentication passed...
            return redirect()->intended($this->redirectTo);
        }else{
            return redirect()->intended('/auth/create');
        }
    }
//    public function logout(Request $request)
//    {
//       $request->session()->forget('userid');
//       return redirect()->intended('');
//    }


}

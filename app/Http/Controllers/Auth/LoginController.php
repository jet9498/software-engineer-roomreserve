<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Socialite;
use App\User;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    // public function login()
    // {
    //     if(Auth::attempt([$this->field() => request()->StudentID , 'password' => request()->password])){
    //         return redirect()->intended('/userlogin');
    //     }
    //     else{
    //         \Session::flash('flash_message','คุณกรอก User ID หรือ รหัสผ่านผิด โปรดลองใหม่อีกครั้ง');
    //         return redirect()->back();
    //     }
    // }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }


}




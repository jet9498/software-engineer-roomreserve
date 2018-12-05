<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Socialite;
use App\User;
use App\Room;
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
    public function field()
    {
        if(filter_var(request()->email,FILTER_VALIDATE_EMAIL)){
            return 'email';
        }
        else{
            return 'email';
        }
    }
    public function login()
    {
        $fail = 0;
        if(Auth::attempt([$this->field() => request()->email , 'password' => request()->password])){
                if(Auth::user()->status == 1){
                        return redirect('/home.blade.php');
                }
            return redirect()->back();
        }
        else{
            $fail = 1;
            $rooms = Room::get();
            \Session::flash('flash_message','คุณกรอก User ID หรือ รหัสผ่านผิด โปรดลองใหม่อีกครั้ง');
            return view('home')->with('Rooms',$rooms)->with('fail',$fail);
        }
    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
    public function Admin()
    {
        Auth::logout();
        Session::flush();
        return redirect('/adminindex.blade.php');
    }


}

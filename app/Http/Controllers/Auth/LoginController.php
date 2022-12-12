<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function autheticated()
     {
        
            if(Auth::user()->role_id == '1')   //Admin     
            {
                return redirect('admin/dashboard');
                
            }else 
            {
                return redirect('home') ;
            }
    }
                           
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login( Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'student_id' => 'required',
            'password' => 'required',
        ] );

        $fieldType = filter_var($request->student_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'student_id';
        if(auth()->attempt(array($fieldType => $input['student_id'], 'password' =>$input['password']))){
            
            if(Auth::user()->role_id == '1')   //Admin     
            {
                return redirect('admin/dashboard');
                
            }elseif(Auth::user()->role_id == '2') 
            {
                return redirect()->route('home');
            }
            return redirect()->route('home');
        }else{
            return redirect()->route('login')
            ->with('error','Student-ID and password are wrong.');
        }
    }
}

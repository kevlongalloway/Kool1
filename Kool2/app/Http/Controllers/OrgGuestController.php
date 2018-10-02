<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Org;

class OrgGuestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:org');
    }

    /**
     * Show the org login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('org.login');
    }
    
    //logs 
    public function login(Request $request){
        //validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        //get credentials
        $credentials = [
            'email' =>$request->email, 
            'password' => $request->password
        ];
        // attempt to log the user in 
        
        if(Auth::guard('org')->attempt($credentials, $request->remember)){
            //if successful, redirect to their intende location
            return redirect()->intended(route('org.home'));
        }
        
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
     
    
    
}

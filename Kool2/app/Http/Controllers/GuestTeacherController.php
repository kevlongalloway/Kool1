<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teacher;
use App\Classroom;
use Auth;
use Hash;

class GuestTeacherController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:teacher');
    }

    /**
     * Show the ADMIN login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('teacher.auth.login');
    }
    public function showRegisterForm()
    {
        return view('teacher.auth.register');
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
            'password' =>  $request->password
        ];
        // attempt to log the user in 
        
        if(Auth::guard('teacher')->attempt($credentials, $request->remember)){
            //if successful, redirect to their intende location
            return redirect()->intended(route('teacher.home'));
        }
        
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    
         public function registerTeacher(Request $request){
             $this->validation($request);
                $teacher = new Teacher;
                $teacher->name = $request->name;
                $teacher->email = $request->email;
                $teacher->password = Hash::make($request->password);
                $teacher->orgcode = $request->orgcode;
                $teacher->save();
             return redirect(route('teacher.home'));

//        return redirect(route('teacher.home'));
    }
        public function validation(Request $request){
            return $this->validate($request,[
                'name' => 'required|max:255',
                'email' => 'required|unique:teachers|email|max:255',
                'orgcode' => 'nullable|integer|digits:6|exists:orgs,id',
                'password' => 'required|confirmed|max:255',
            ]);
        }
    
    
    
}

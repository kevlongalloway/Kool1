<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Org;
use Auth;

class OrgController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:org');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if($this->isActive()){
            return view('org.home');
        }
        else{
            return view('inactive');
        }

    }
    
    public function isActive(){
        $isactive = Auth::user()->is_active;
        return $isactive;
    }
    
    
   
}

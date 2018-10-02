<?php

namespace App\Http\Controllers;
use App\Org;
use App\Classroom;
use App\Song;
use Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
        {   
            $songs = Song::all();
            if($this->isActive()){
                return view('home')->with('songs',$songs);
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

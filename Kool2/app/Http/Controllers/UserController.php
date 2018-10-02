<?php

namespace App\Http\Controllers;
use App\Classroom;
use Illuminate\Http\Request;
use App\User;
use App\Assigned;
use DB;

use Auth;

class UserController extends Controller
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
    public function isActive(){
            $isactive = Auth::user()->is_active;
            return $isactive;
        }
    //show classes available to join 
        public function classList(){
            $orgcode = $this->getOrgCode();
            $classes = Classroom::where('org_code',$orgcode)->get();
            return view('auth.join')->with('classes',$classes);    
        }
    //show classes currently assigned to
//          public function showClasses(){
//        $id = $this->id();
//        $classes = Assigned::where('student_id',$id);
//    
//        return view('auth.classe')->with('classes',$classes);
//    }
    
    public function showClasses(){
        $id = $this->id();
       $user = User::find($id);
        return view('auth.classe')->with('classes', $user->classes);
    
    }
    
    /**adds student to a class
    * adds field to assigned table
    *returns redirect back
    *needs to redirect to student class dashboard
    */
    
    public function joinClass($class_id){
        $id = $this->id();
        $user = User::find($id);
        if ($this->checkclass($class_id)){
        $assigned = new Assigned;
        $assigned->student_id = $this->id();
        $assigned->class_id = $class_id;
        $assigned->save();
        } 
        return redirect()->route('showclasses');
    }
    public function checkclass($class_id){
        $id = $this->id();
        $assigned = Assigned::where('student_id', $id)
                            ->where('class_id', $class_id)
                            ->get();
        if (count($assigned)>0){
            return false;
        }
        return true;
    }
    
    
        public function id(){
        $currentuserid = Auth::user()->id;
        return $currentuserid;
    }
        public function getOrgCode(){
        $currentuserid = Auth::user()->orgcode;
        return $currentuserid;
    }
   
}

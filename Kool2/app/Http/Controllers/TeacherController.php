<?php

namespace App\Http\Controllers;
use App\Classroom;
use Illuminate\Http\Request;
use App\Teacher;

use Auth;

class TeacherController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:teacher');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
       public function index()
    {   
        if($this->isActive()){
        $data = $this->getOrgcode();
        return view('teacher.home', ['data' => $data]);;
        }
        else{
            return view('inactive');
        }

    }
    

    
    public function isActive(){
        $isactive = Auth::user()->is_active;
        return $isactive;
    }
    public function id(){
        $currentuserid = Auth::user()->id;
        return $currentuserid;
    }
    public function getOrgCode(){
        $currentuserid = Auth::user()->orgcode;
        return $currentuserid;
    }
    
//    public function showClasses(){
//        $id = $this->id();
//        $classes = Classroom::where('teacher_id', $id)
//               ->get();
//    
//        return view('teacher.classes')->with('classes',$classes);
//    }
    public function showClasses(){
        $id = $this->id();
       $teacher = Teacher::find($id);
        return view('teacher.classes')->with('classes', $teacher->classes);
    
    }
    
    public function showCreateClassForm(){
        return view('teacher.createclass');
    }
    
    public function createClassroom(Request $request){
         $this->validation($request);
                $classroom = new Classroom;
                $classroom->name = $request->name;
                $classroom->teacher_id = $this->id();
                $classroom->org_code = $this->getOrgCode();
                $classroom->grade = $request->grade;
                $classroom->save();
             return redirect(route('teacher.classes'));
    }
    
           
        public function validation(Request $request){
            return $this->validate($request,[
                'name' => 'required|max:255',
                'teacher_id' => 'integer|exists:teachers,id',
            ]);
        }

    
    
    
    
    
   
}

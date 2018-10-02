<?php

namespace App\Http\Controllers;

use App\Org;
use App\Teacher;
use App\User;
use App\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Hash;

class AdminController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin');
    }
    
    public function showNewOrgForm(){
        return view('admin.init');
    }
    
    
    public function createOrganization(Request $request){
        $org = new Org;
        $org->id = $this->uniqueOrgCode();
        $org->name = $request->name;
        $org->email = $request->email;  
        $org->password = Hash::make($request->password);
        $org->save();
        
        return redirect(route('admin.users'));
    }
   
     
    public function uniqueOrgCode(){
        $code = rand(100000,999999);
        $check = DB::table('orgs')->where('id', $code)->value('id');
        if($check == $code){
            $this->uniqueOrgCode();
        }
        else {
            return $code;
        }
    
    }
    
     public function ShowUserlist(){
        $orgs = Org::all()->reverse();
        return view('admin.accounts', compact('orgs'));
    }
    
    public function deactivate($id){
        Org::where('id', $id)
          ->update(['is_active' => 0]); 
        Teacher::where('orgcode', $id)
          ->update(['is_active' => 0]);
        User::where('orgcode', $id)
          ->update(['is_active' => 0]);
        return redirect()->back();
    }
    
    public function activate($id){
       Org::where('id', $id)
          ->update(['is_active' => 1]); 
        Teacher::where('orgcode', $id)
          ->update(['is_active' => 1]);
        User::where('orgcode', $id)
          ->update(['is_active' => 1]);
        return redirect()->back();
    }
    
    /**
    *Upload Songs
    *   TEMPORARY FUNCTIONS - FOR DEMONSTRATION PURPOSES ONLY
    *
    */
    
    public function uploadSongsForm(){
        return view('admin.uploadsong');
    }
    
    public function upload(Request $request){
        $this->validate($request, [
            'title' => 'required|max:255',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required',
            'description' => 'required',
            
        ]);
        $filename = $request->file('thumbnail')->getClientOriginalName();
        $this->storefile($request);
        
        $song = new Song;
        $song->title = $request->title;
        $song->description = $request->description;
        $song->link = $request->link;
        $song->tags = $request->tags;
        $song->grade = $request->grade;
        $song->img_name = $filename;
        $song->save();
        return redirect(route('admin.home'));
    }
    
    
    public function storeFile(Request $request){
        if($request->hasFile('thumbnail'))
        {
            $filename = $request->file('thumbnail')->getClientOriginalName();
            $request->file('thumbnail')->storeAs('public/images',$filename);
        }
    }
    
    public function songstest(){
        $songs = Song::all();
        return view('admin.songs')->with('songs',$songs);
    }
    
    public function songPage($id){
        $song = Song::where('id',$id)->get();
        return view('admin.song')->with('song',$song);
    }
   
}

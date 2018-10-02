<?php 
namespace App;
use Eloquent;
use DB;
class Classroom extends Eloquent
{
    protected $table = 'classes';
    
     protected $fillable = [
        'name',
    ];
    
    public function teacher(){
        return $this->belongsTo('App\Teacher','teacher_id');
    }
//    public function students(){
//        $students = Assigned::where('class_id',$this->id)->all()->student_id;
//        return User::where('id', $students)->all();
//    }
    public function students(){
        return $this->belongsToMany('App\User','class_user','student_id','class_id');
    }
    
    public function playlists(){
        return $this->hasMany('App\Playlist','classroom_id');
    }

}


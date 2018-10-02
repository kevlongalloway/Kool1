<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','orgcode','is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function classes(){
        return $this->belongsToMany('App\Classroom','class_user','student_id','class_id');
    }
    
    public function songs(){
        return $this->belongsToMany('App\Songs','song_user','user_id','song_id');
    }
    
    public function playlists(){
    return $this->hasMany('App\Playlist','user_id');
    }

}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    use Notifiable;
    
    protected $guard = 'teacher';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','orgcode','classcode','is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function org(){
        return $this->belongsTo('App\Org','orgcode');
    }
    public function classes(){
       return $this->hasMany('App\Classroom');
    }
    
    public function playlists(){
    return $this->hasMany('App\Playlist','teacher_id');
    }
}

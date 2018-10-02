<?php 
namespace App;
use Eloquent;
use DB;
class Playlist extends Eloquent
{
    protected $table = 'playlists';
    
    public function teachers(){
        return $this->belongsTo('App\Teacher');
    }
    
    public function songs(){
        return $this->belongsToMany('App\Song','playlist_songs','playlist_id','song_id');
    }
    
    
}
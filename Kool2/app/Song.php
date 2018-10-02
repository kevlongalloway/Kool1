<?php 
namespace App;
use Eloquent;
use DB;
class Song extends Eloquent
{
    protected $table = 'songs';
    
     protected $fillable = [
        'title','tags','description','link','grade','img_name',
    ];
    


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  

public $timestamps = true;	
    
protected $table = 'images';


protected $fillable = array('album_id','description','image');


 public function album()
    {
        return $this->belongsTo('App\Album');
    }




}

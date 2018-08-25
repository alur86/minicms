<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
   
 public $timestamps = true;	
    
 protected $table = 'news';


  
public function user()
{
    return $this->belongsTo('App\User');
}

}

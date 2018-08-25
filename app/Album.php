<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    
 public $timestamps = true;	
    
 protected $table = 'albums';



protected $fillable = array('name','description','name');


public function  images(){

return $this->has_many('images');

}



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Image as Img;

class ImagesController extends Controller
{


 public function index () {

 $albums = Album::orderBy('created_at')->paginate(10);

 $total = Album::count();

return view('images.index')->with('albums',$albums)->with('total',$total);

}





}
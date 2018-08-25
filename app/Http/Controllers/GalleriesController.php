<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Image as Img;

class GalleriesController extends Controller
{
   


public function show($id) {

$gallery = Img::findOrFail($id);

return view('galleries.show')->with('gallery',$gallery);


}





}

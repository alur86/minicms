<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;


class NewsController extends Controller
{
    
 public function index () {

 $news = News::orderBy('created_at')->paginate(3);

 $total = News::count();

return view('news.index')->with('news',$news)->with('total',$total);


}


public function show($id) {

$news = News::findOrFail($id);

return view('news.show')->with('news',$news);


} 




}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class ArticlesController extends Controller
{
   

public function index () {

$articles = Article::orderBy('created_at')->paginate(5);


$total = Article::count();

return view('articles.index')->with('articles',$articles)->with('total',$total);


}




}

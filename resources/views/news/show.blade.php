@extends('layouts.app')

@section ('content')

@section('title', 'Новости')


<div class="row">
<div class="container">
<div class="col-md-12 col-md-offset-0">                                  
<h3>{{$news->title}}</h3>  
<div class="col-sm-6">
<p> {!!  nl2br(e($news->content)) !!}</p></p>
</div>
 </div>
 <p><a href="#" onclick="history.go(-1)"  class="btn btn-primary btn-outline with-arrow">Назад <i class="icon-arrow-right"></i></a></p></p>
 </div>
 </div>            
 </div>
 </div>            
 </div>
 </div>            

</section>
@stop
       

         





























            

@extends('layouts.app')

@section('content')

@section('title', 'Новости' )


<div class="row">
<div class="container">

@if (count($total) > 0) 

@foreach($news as $item)
<div class="col-md-12 col-md-offset-0">                               
<h3>{{$item->title}}</h3>
<span class="fh5co-date">{{$item->created_at->format('d m Y')}}</span>
<p>{!! $item->intro !!} </p>
<p><a href="{{ URL::to('news_show/'.$item->id) }}" class="btn btn-primary btn-outline with-arrow">Читать дальше... <i class="icon-arrow-right"></i></a></p>
 </div>
 </div>            
 @endforeach
  </div>
  </div>

{!! $news->links() !!}


@else

<h3>Нет новостей в данный момент</h3>

@endif
   
</section>
@stop
       

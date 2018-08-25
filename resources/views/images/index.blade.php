@extends('layouts.app')
@section('content')
@section('title', 'Альбомы' )

<section id ="albums">
<div class="container">
@if (count($total) > 0) 
    <h1 class="h3 text-center page-header">Альбомы</h1>
</div>

@foreach($albums as $item)
<div class="row">
 <div class="col-md-4">
    <div class="thumbnail">
      <a href="{{ URL::to('gallery_show/'.$item->id) }}">
        <img src="{{'albums/'.$item->cover_image }}" alt="{{$item->name}}" style="width:70%">
        <div class="caption">
          <h3>{{$item->description}}</h3>
        </div>
      </a>
    </div>
  </div>
 @endforeach


{!! $albums->links() !!}

@else

<h3>Нет альбомов в данный момент</h3>

@endif
   
</div>
</div>
</section>
@stop






























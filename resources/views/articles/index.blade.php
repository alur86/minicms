@extends('layouts.app')
@section ('content')
@section('title', 'Cтатьи' )


<section id ="articles">
<div class="container">
<div class="row">

@if (count($total) > 0) 
        
@foreach($articles as $item)
      <h3>{{$item->title}}</h3>
        <p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>
        <div class="col-lg-6 col-lg-offset-3">
       <p>{!! $item->content !!} </p>
        
        </div>
      </div>
    </div>

@endforeach

{!! $articles->links() !!}

@else

<h3>Нет статей в данный момент</h3>

@endif

</section>

@stop
        


















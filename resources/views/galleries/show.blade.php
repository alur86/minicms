@extends('layouts.app')
@section('content')
@section('title', 'Галерея' )
<section id ="gallery">
    <h1 class="h3 text-center page-header">Галерея</h1>
</div>
<hr>
<style>
div.gallery {
    border: 1px solid #ccc;
    width: 180px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    text-align: center;
}
</style>

<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

<div class="container">
    <div class="row">
 <div class="col-md-4">
    <div class="thumbnail">
          <a data-fancybox="gallery" href="{{ '/albums/images/'.$gallery->image }}">
        <img src="{{'/albums/images/'.$gallery->image}}" data-lightbox="{{$gallery->description}}" class="img-rounded" alt="{{$gallery->description}}"  style="width:60%">
        </a>
         <div class="gallery"><h4>Описание:{{$gallery->description}}</h4></div>

        </div>
    </div>

<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>

  </div>

</div>



 
</section>
@stop

@extends('layouts.app')
@section('content')
<main>
  <div class="jumbotron">
    <div class="btn">current series</div>
  </div>
  <div class="container">
    @foreach ($cards as $card)
      <div class="box">
        <div class="image-box">
          <img src="{{$card['thumb']}} ">
        </div>
        <p>{{$card['series']}} </p>
      </div>
    @endforeach
    

  </div>
  <div class="load-container">
    <div class="btn">load more</div>
  
  </div>

  <section class="infobar">
    @foreach ($infos as $info)
    <div class="info-box">
      <img src="{{$info['image']}} " alt="">
      <p class="description">{{$info['text']}}</p>
    </div>
    @endforeach
    
  </section>

</main>
@endsection
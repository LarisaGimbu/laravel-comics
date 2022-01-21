@extends('layouts.app')
@section('content')
<main>
  <div class="jumbotron">
    <div class="btn">current series</div>
  </div>
  <div class="container">
    <div class="box">
      <div class="image-box">
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX">
      </div>
      <p>Action Comics</p>
    </div>

  </div>
  <div class="load-container">
    <div class="btn">load more</div>
  
  </div>

  <section class="infobar">
    <div class="info-box">
      <img src="{{asset('img/buy-comics-digital-comics.png')}} " alt="">
      <p class="description">digital comics</p>
    </div>
  </section>

</main>
@endsection
<link rel="stylesheet" type="text/css" href="css/main.css">

<style type="text/css">

</style>
@extends('layouts.app_carousel')

@section('content')

@include('layouts.carousel')

<br><br>
<div id="app">        
        <main class="py-4">
            <div class="container">

<div class="category">
<center><h4>Event Categories</h4></center>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="">
            <div class="card-block m-3">
              <div class="text-center">
                <a href="education">
                <img class="fas fa-4x img-sizing" src="image/book.png" > </img>
                </a>
              <h5 class="card-title">Education</h5>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="">
            <div class="card-block m-3">
              <div class="text-center">
                <a href="animals">                                                
                <img src="image/nature.png" class="fas fa-4x img-sizing"></img></a>
              <h5 class="card-title">Animals & Nature</h5>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="">
            <div class="card-block m-3">
              <div class="text-center">
                <a href="culture">                                                
               <img src="image/arts.png" class="fas fa-code fa-4x img-sizing"></img></a>
              <h5 class="card-title">Culture & Arts</h5>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="">
            <div class="card-block m-3">
              <div class="text-center">
                <a href="community">                                                
                <img src="image/old folks.png" class="fas fa-code fa-4x img-sizing"></img></a>
              <h5 class="card-title">Community Service</h5></div>
            </div>
          </div>
        </div><br>
        <div class="col-md-4">
          <div class="">
            <div class="card-block m-3">
              <div class="text-center">
                <a href="festival">                                
                <img src="image/festival.png" class="fas fa-code fa-4x img-sizing"></img>
                </a>
              <h5 class="card-title">Festival</h5>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="">
            <div class="card-block m-3">
              <div class="text-center">
                <a href="health">                                                
                <img src="image/health.png" class="fas fa-code fa-4x img-sizing"></img></a>
              <h5 class="card-title">Health</h5>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <br>
<hr>

<div class="bs-example">
    <h5>Upcoming Events</h5>
    <div class="list-group">
      @if(count($post) > 0)
      @foreach($post as $posts)

        <div href="#" class="list-group-item list-group-item-action ">
          <div class="d-flex w-100 justify-content-between">
            <h5>{{ $posts->EventName }}</h5>
            <a href="{{ route('remind.show', ['id'=>$posts->id]) }}" class="btn btn-info">Remind Me</a>
          </div>
            <p class="upcomingEvent"> Description: {{ $posts->Description }} </p>
            <p class="upcomingEvent"> Event Date: {{ $posts->EventDate}} </p> 
        </div>
        @endforeach
        @else
          <p>No upcoming event</p>

    @endif

    </div>
</div>

  </div>
    </main>
      </div>

@endsection

<link rel="stylesheet" type="text/css" href="css/main.css">

@extends('layouts.app')

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
    <h4>Upcoming Events</h4>    
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h4>Event Title</h4>
                <button type="button" class="btn btn-secondary btn-sm reminder">Notify me</button>
            </div>
            <p>
              <strong>Details</strong>

            </p>
        </a>
        
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h4>Event Title</h4>
                <button type="button" class="btn btn-secondary btn-sm reminder">Notify me</button>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
        </a>

                <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h4>Event title</h4>
                <button type="button" class="btn btn-secondary btn-sm reminder">Notify me</button>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
        </a>

    </div>
</div>

  </div>
    </main>
    	</div>

@endsection
